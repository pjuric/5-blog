<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Show all categories.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Create new category.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validateWithBag('categoryCreation', [
            'category' => ['required', 'string', 'max:255', 'unique:categories,title'],
        ], [
            'category.required' => __('categories.validation_title_required'),
            'category.max'      => __('categories.validation_title_max'),
            'category.unique'   => __('categories.validation_title_unique'),
        ]);

        $category        = new Category;
        $category->title = strtolower($request->category);

        $category->save();

        Session::flash('success', __('categories.create_successfull'));

        return redirect()->route('category.index');
    }

    /**
     * View category and all its related posts.
     *
     * @param Category $category
     *
     * @return View
     */
    public function view(Category $category): View
    {
        $category = $category->load('posts');
        $posts    = $category->posts()->orderBy('updated_at', 'desc')->paginate(10);

        return view('categories.view', compact('category', 'posts'));
    }

    /**
     * Update category (title).
     *
     * @param Request  $request
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validateWithBag('categoryUpdate', [
            'category' => ['required', 'string', 'max:255', 'unique:categories,title'],
        ], [
            'category.required' => __('categories.validation_title_required'),
            'category.max'      => __('categories.validation_title_max'),
            'category.unique'   => __('categories.validation_title_unique')
        ]);

        $category->title = strtolower($request->category);

        $category->save();

        Session::flash('success', __('categories.update_successfull'));

        return redirect()->route('category.view', $category->id);
    }

    /**
     * Delete category.
     *
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($category->posts->count()) {
            Session::flash('error', __('categories.delete_error_posts_exist'));
            return back();
        }

        $category->delete();

        Session::flash('success', __('categories.delete_successfull', ['title' => $category->title]));

        return Redirect::route('category.index');
    }
}
