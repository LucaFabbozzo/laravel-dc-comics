<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;
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
        $comics = Comic::orderBy('id', 'desc')->paginate(5);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        // // validazione
        // $request->validate([
        //     'title' => 'required|max:100|min:2',
        //     'image' => 'required|max:255|min:10',
        //     'series' => 'required|max:100|min:2',
        //     'type' => 'required|max:20|min:2',
        //     'price' => 'required|decimal:2',
        //     'sale_date' => 'date_format',
        // ]);

        $form_data = $request->all();

            $new_comic = new Comic();
            // $new_comic->title = $form_data['title'];
            // $new_comic->slug = Comic::generateSlug($new_comic->title);
            // $new_comic->image = $form_data['image'];
            // $new_comic->type = $form_data['type'];
            // $new_comic->series = $form_data['series'];
            // $new_comic->price = $form_data['price'];
            // $new_comic->description = $form_data['description'];
            $form_data['slug'] = Comic::generateSlug($form_data['title']);
            $new_comic->fill($form_data);
            $new_comic->save();
            //dd($new_comic);

            return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
       return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
    // se il titolo e stato modificato genere un nuovo slug altrimenti utilizzo il vecchio
        $form_data = $request->all();

        if($form_data['title'] != $comic->title) {
            $form_data['slug'] = Comic::generateSlug($form_data['title']);
        } else {
            $form_data['slug'] = $comic->slug;
        }

        $comic->update($form_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        // con with() passo i dati in sessione alla vista
        return redirect()->route('comics.index')->with('deleted', "The comic $comic->title was succesfully deleted");
    }
}
