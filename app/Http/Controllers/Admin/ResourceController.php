<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.homepage',compact('comics'));
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
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|string|between:5,100',
            'description'=> 'nullable|string',
            'thumb'=> 'nullable|url',
            'series'=> 'required|string|between:5,50',
            'sale_date'=> 'required|date',
            'type'=>    [   
                            'required',
                            Rule::in(['comic book','graphic novel']),
                        ],
            'price'=> 'required|numeric|between:1,99'
        ]);
        $data=$request->all();
        $new_comic= new Comic();
        $new_comic->fill($data);
        $new_comic->save();
        return redirect()->route('comics.show',$new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
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
        $request->validate([
            'title'=> 'required|string|between:5,100',
            'description'=> 'nullable|string',
            'thumb'=> 'nullable|url',
            'series'=> 'required|string|between:5,50',
            'sale_date'=> 'required|date',
            'type'=>    [   
                            'required',
                            Rule::in(['comic book','graphic novel']),
                        ],
            'price'=> 'required|numeric|between:1,99'
        ]);
        $data=$request->all();
        $comic->update($data);
        return redirect()->route('comics.index',$comic->id);
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
        return redirect()->route('comics.index');
    }
}
