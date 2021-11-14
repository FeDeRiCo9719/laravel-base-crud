<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validation = [
        'title' => 'required|max:60',
        'description' => 'required',
        'thumb' => 'required|url',
        'price' => 'required|min:0',
        'series' => 'required|max:80',
        'sale_date' => 'required|date',
        'type' => 'required|max:50'
    ];
    /** ----------------------------------------------------------------------
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);

        return view("comics.index", compact('comics'));
    }   


    /** ----------------------------------------------------------------------
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /** ----------------------------------------------------------------------
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request-> validate($this->$validation);

        $data = $request->all();
        // dd($data);

        $newComic = Comic::create($data);

        return redirect()->route("comics.show", $newComic->id);
        
    }

    /** ----------------------------------------------------------------------
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        return view("comics.show", compact('comic'));      
    }

    /** ----------------------------------------------------------------------
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /** ----------------------------------------------------------------------
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // validation
        $request-> validate($this->$validation);
        
        $data = $request->all();
        $comic->update($data);

        return redirect()->route("comics.show", $comic->id);
        // return redirect()->route("comics.index");
    }

    /** ----------------------------------------------------------------------
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
