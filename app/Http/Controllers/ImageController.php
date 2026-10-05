<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->get();
        return view('admin.images.index', compact('images'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //     ]);

    //     // dd($request->all());


    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $name = time() . '.' . $image->getClientOriginalExtension();
    //         $path = $image->storeAs('public/images', $name);

    //         $imageModel = Image::create([
    //             'name' => $name,
    //             'path' => $path,
    //             'url' => asset(Storage::url($path))
    //         ]);

    //         return response()->json([
    //             'success' => true,
    //             'image' => $imageModel,
    //             'message' => 'Image uploaded successfully'
    //         ]);
    //     }

    //     return response()->json(['success' => false, 'message' => 'Image upload failed']);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $images = [];

        foreach ($request->file('image') as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;

            // Save the image in public/uploads/images/
            $file->move(public_path('uploads/images'), $filename);

            $path = 'uploads/images/' . $filename;

            // Save to DB
            $image = Image::create([
                'name' => $filename,
                'url' => asset($path),
                'path' => $path,
            ]);

            $images[] = $image;
        }

        return response()->json([
            'success' => true,
            'message' => 'Images uploaded successfully',
            'images' => $images,
        ]);
    }



    public function destroy(Image $image)
    {
        // Build the absolute path to the image in the public directory
        $filePath = public_path($image->path);

        // Delete the file if it exists
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $image->delete();

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully'
        ]);
    }
}
