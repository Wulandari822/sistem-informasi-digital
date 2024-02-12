<?php

namespace App\Http\Controllers;

use App\Models\Slide1;
use App\Models\uploadimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class Slide1Controller extends Controller
{
    public function index()
    {
        return view('admin.slide1');
    }

    public function create()
    {
        return view('admin.slide1-create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images.*' => 'required|image|mimes:jpeg,png|max:2048', // Example validation for each image
        ]);

        if ($validator->passes()) {
            foreach ($request->file('images') as $image) {
                $slide = new Slide1();
                $slide->save();

                // Simpan gambar
                $imgExtension = $image->getClientOriginalExtension();
                $newImageName = 'slide1_' . $slide->id . '.' . $imgExtension;
                $image->move(public_path('upload/slide1'), $newImageName);

                // Update kolom gambar di database
                $slide->img = $newImageName;
                $slide->save();
            }

            $request->session()->flash('success', 'Images Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Images Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
}
