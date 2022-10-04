<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postimage;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
    //
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        /*Logic to store data*/
        $data= new Postimage();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('image'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        return redirect()->route('images.view');
    }
    //View image
    public function viewImage(){
        $imageData= Postimage::all();
        return view('view_image', compact('imageData'));
    }
}
