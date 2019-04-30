<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
class AlbumsController extends Controller
{
    public function index(){

        $albums = Album::all();
        return view('index')->with('albums',$albums);
    }

    public function create(){
        return view('create');
    }
    public function show($id){
        $album = Album::with('photos')->find($id);
        return view('show')->with('album',$album);
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999'
        ]);
    
        $fileWithExtension = $request->file('cover_image')->getClientOriginalName();
        $fileWithoutExtension = pathinfo($fileWithExtension,PATHINFO_FILENAME);
        $fileExtension = $request->file('cover_image')->getClientOriginalExtension();
        $fileToStore = $fileWithoutExtension."_".time().".".$fileExtension;
        $path = $request->file('cover_image')->storeAs('public/cover_image',$fileToStore);
        $album = new Album;
        $album->name =          $request->input('title');
        $album->description=    $request->input('description'); 
        $album->cover_image =   $fileToStore;

        $album->save();
        return redirect('/')->with('success','Album created!!');

    }
}
