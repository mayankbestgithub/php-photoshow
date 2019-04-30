<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
class PhotosController extends Controller
{
    public function create($id){

        return view('photo.create')->with('id',$id);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|max:1999'
        ]);
    
        $fileWithExtension = $request->file('photo')->getClientOriginalName();
        $fileWithoutExtension = pathinfo($fileWithExtension,PATHINFO_FILENAME);
        $fileExtension = $request->file('photo')->getClientOriginalExtension();
        $fileToStore = $fileWithoutExtension."_".time().".".$fileExtension;
        $path = $request->file('photo')->storeAs('public/cover_image/'.$request->input('album_id'),$fileToStore);
        $photo = new Photo;
        $photo->album_id =       $request->input('album_id');
        $photo->title =          $request->input('title');
        $photo->size =           $request->file('photo')->getClientSize();
        $photo->description=     $request->input('description'); 
        $photo->photo =          $fileToStore;

        $photo->save();
        return redirect('/')->with('success','Photo created!!');
    }
}
