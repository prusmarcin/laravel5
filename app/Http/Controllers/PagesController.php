<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesRequest;
use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::orderBy('id', 'DESC')->paginate(10);
        
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagesRequest $request)
    {
        //$request->input('title');
        Pages::create($request->all()); //all() pobiera caly request lacznie z tokenem, w modelu trzeba napisac ktore pola z requesta ida do stworzenia rekordu
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages $page
     * @return \Illuminate\Http\Response
     */
    //Laravel zaproponowal ze dostaniemy id wpisu, a my zrobismy ze przekazujemy caly obiekt czyli bedzie zawieral id, title, content
    public function edit(Pages $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PagesRequest  $request
     * @param  Pages $page
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request, Pages $page)
    {
        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Pages $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }
}
