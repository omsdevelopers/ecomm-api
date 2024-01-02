<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $gallery = Gallery::all();

        return view('admin.gallery.index', [
            'galleries' => $gallery,
            'header_title' => "Add New Gallery",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // The file will be stored in storage/app/public/images
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is provided
        }

        // Create a new gallery entry
        $gallery = new Gallery([
            'name' => $request->input('name'),
            'image' => $imageName,
            'status' => $request->input('status'),
        ]);

        // Save the gallery entry
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'gallery deleted successfully');
    }
}
