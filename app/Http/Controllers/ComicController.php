<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "price" => "required"
        ]);

        $data = $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // $password = $request->input('password');
        // if(!$password){
        //     $data = $request->except('password');
        // }else{
        //     $data = $request->all();
        // }

        


        $data = $request->all();

        Validator::make($data,[
            "title" => "min:5",
        ])->validate();

        $comic->update($data);
        return redirect()->route("comics.show", $comic->id)->with("msg","Updated successfully" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
        
    }
}
