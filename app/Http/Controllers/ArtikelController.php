<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Event;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index(){
        return view('gush.home');
    }

    public function event(){
        $events = Event::all();
        return view('gush.event',  compact('events'));
    }

    public  function create()
    {
        return view('gush.create');
    }

    public  function store(Request $request)
    {   
        $this->validate($request, [
            'konten' => 'required',
            'judul' => 'required',
            'gambar' => 'required|image',
        ]);

       $slug = Str::slug($request->judul.time(), '-');

        if($request->file('gambar')){
            $gambar = $request->file('gambar')->store('gambar', 'public');
            
        }else{
            $gambar = '';
        }

         Event::create([
            'status' => Auth::user()->status,
            'title' => $request->judul,
            'slug' => $slug,
            'content' => $request->konten,
            'user_id' => Auth::user()->id,
            'image' => $gambar
        ]);

        // return view('gush.create')->with('msg','Data Berhasil Ditambah');
        return redirect()->route('create-event')->with('msg','Data Berhasil Diubah');

    }

    public function showDetail($slug)
    {
        $event = Event::where('slug', $slug)->first(); 
        return view('gush.singgle', compact('event'));
    }

    public function delete($slug){
        $event = Event::where('slug', $slug)->first(); 
        $event->delete();
        return redirect()->route('event')->with('msg','Data Berhasil Dihapus');
    }

    public function edit($slug){
        $event = Event::where('slug', $slug)->first(); 
        return view('gush.update', compact('event'));
    }

    public function update(Request $request, $slug){

        $this->validate($request, [
            'konten' => 'required',
            'judul' => 'required'
        ]);
  
        $event = Event::where('slug', $slug)->first(); 
     
          $event->update([
                'title' => $request->judul,
                'content' => $request->konten,
                'slug' => $slug,
            ]);
          return redirect()->route('singgel-event', $slug)->with('msg','Data Berhasil Diubah');
    }



}
