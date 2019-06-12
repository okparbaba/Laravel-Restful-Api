<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
   public function downloadImg()
   {
     return response()->download(public_path('c8.png'),'User Image');
   }
   public function uploadImg(Request $request)
   {
     $fileName = "user_image.jpg";
     $path = $request->file('photo')->move(public_path("/"),$fileName);
     $photoUrl = url('/'.$fileName);
     return response()->json(['url' => $photoUrl],200);
   }
   
}
