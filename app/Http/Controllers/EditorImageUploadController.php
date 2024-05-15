<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class EditorImageUploadController extends Controller
{
    /**
     * Store and send image uploaded via ckEditor to its js script.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), ['upload' => 'required|file|image|max:5000']);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first('upload')
                ]
            ], 400);
        }

        $path     = $request->file('upload')->store('uploads', ['disk' => 'public']);
        $imageURL = asset('storage/' . $path);

        return response()->json(['url' => $imageURL]);
    }
}
