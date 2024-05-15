<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show all posts screen.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = Post::with('user', 'category')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show create post screen.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    /**
     * Create new post.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Since we're using 3rd party solution for description, validation
        // rules won't work, so firstly we'll need custom check description
        if (empty($request->description)) {
            return redirect()->back()->with('error', __('posts.validation_description_required'));
        }

        $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'category'    => ['nullable', 'integer', 'exists:categories,id'],
        ], [
            'title.required' => __('posts.validation_title_required'),
            'title.max'      => __('posts.validation_title_max'),
        ]);

        $user = Auth::user();
        $post = new Post;

        $post->title       = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->filled('category') ? $request->category : null;
        $post->user_id     = $user->id;

        $post->save();

        session()->flash('success', __('posts.create_successfull'));

        return redirect()->route('post.index');
    }

    /**
     * Show post.
     *
     * @param Post $post
     *
     * @return View
     */
    public function view(Post $post): View
    {
        return view('posts.view', compact('post'));
    }

    /**
     * Show edit post screen.
     *
     * @param Post $post
     *
     * @return View
     */
    public function edit(Post $post): View
    {
        $categories        = Category::all();
        $post->description = html_entity_decode($post->description);

        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update post.
     *
     * @param Request $request
     * @param Post    $post
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        // Since we're using 3rd party solution for description input,
        // validation rules won't work, so firstly we'll need custom validate
        if (empty($request->description)) {
            return redirect()->back()->withInput()->with('error', __('posts.validation_description_required'));
        }

        $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'category'    => ['nullable', 'integer', 'exists:categories,id'],
        ], [
            'title.required' => __('posts.validation_title_required'),
            'title.max'      => __('posts.validation_title_max'),
        ]);

        $post->update([
            'title'       => $request->title,
            'description' => $request->description,
            'category_id' => $request->filled('category') ? $request->category : null,
        ]);

        session()->flash('success', __('posts.update_successfull'));

        return redirect()->route('post.view', $post->id);
    }

    /**
     * Delete post.
     *
     * @param Post $post
     *
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        $imagePaths = $this->findImagePathsInDescription($post->description);

        if (!empty($imagePaths)) {
            foreach ($imagePaths as $imagePath) {
                $this->deleteImage($imagePath);
            }
        }

        session()->flash('success', __('posts.delete_successfull'));

        return Redirect::route('post.index');
    }

    /**
     * Pick all image paths from post description.
     *
     * @param string $description
     *
     * @return array
     */
    private function findImagePathsInDescription(string $description): array
    {
        $imagePaths = [];

        preg_match_all('/<img[^>]*?src="([^"]+)"/', $description, $matches);

        if (isset($matches[1])) {
            $imagePaths = $matches[1];
        }

        return $imagePaths;
    }

    /**
     * Delete image from storage.
     *
     * @param string $imagePath
     *
     * @return void
     */
    private function deleteImage(string $imagePath): void
    {
        $publicDiskPath = storage_path('app/public/uploads/' . basename($imagePath));

        if (file_exists($publicDiskPath)) {
            unlink($publicDiskPath);
        }
    }
}
