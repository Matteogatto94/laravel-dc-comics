<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
        $comics = Comic::orderByDesc('id')->get();
        //dd($comics);
        return view('admin.comics.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $val_data = $request->validate([
            'title' => 'required|min:10|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:15',
            'type' => 'nullable|max:20'
        ]);

        //dd($val_data);

        Comic::create($val_data);

        /*$comic = new Comic();
        $comic->title = $request['title'];
        $comic->description = $request['description'];
        $comic->thumb = $request['thumb'];
        $comic->price = $request['price'];
        $comic->series = $request['series'];
        $comic->sale_date = $request['sale_date'];
        $comic->type = $request['type'];
        $comic->save();*/

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
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
        //dd($request->all(), $comic);

        $val_data = $request->validate([
            'title' => 'required|min:10|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:15',
            'type' => 'nullable|max:20'
        ]);

        /*$data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'series' => $request['series'],
            'sale_date' => $request['sale_date'],
            'type' => $request['type'],
        ];*/
        $comic->update($val_data);

        return to_route('comics.index')->with('message', 'Comic Update Succefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', 'Comic Deleted Succefully');
    }
}
