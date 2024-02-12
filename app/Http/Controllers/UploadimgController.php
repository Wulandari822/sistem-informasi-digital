<?php

namespace App\Http\Controllers;

use App\Models\uploadimg;
use Illuminate\Http\Request;

class UploadimgController extends Controller
{
    public function uploadimg(Request $request)
    {
        dd($request->all());
        $image = $request->image;

        if (!empty($image)) {
            $originalName = $image->getClientOriginalName();  // Get the original filename
            $ext = $image->getClientOriginalExtension();

            $currentTimestamp = now()->format('d-m-Y');  // Format the current time as YYYYMMDDHHmmss
            $newName = $currentTimestamp . '_' . $originalName;  // Combine formatted timestamp and original filename

            $tempImage = new uploadimg();
            $tempImage->name = $newName;  // Store the combined name
            $tempImage->save();

            $image->move(public_path() . '/upload', $newName);

            return response()->json([
                'status' => true,
                'image_id' => $tempImage->id,
                'message' => 'Image uploaded successfully'
            ]);
        }
    }
}
