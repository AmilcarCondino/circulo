<?php

namespace App\Http\Controllers;


use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use App\Image;
use App\Http\Requests\ImageRequest;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = Image::orderBy('id', 'ASC')->get();

        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $images = Image::all();
        $page_list = array( '0' => 'Seleccione una Pagina') + Page::lists('page_number', 'id')->all();
        return view('images.create', compact('page_list', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        //
        $input = Request::all();

        Image::create($input);

        return redirect('imagenes');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $image = Image::findOrFail($id);

        $page_list = array( '0' => 'Seleccione una Pagina') + Page::lists('page_number', 'id')->all();

        return view('images.edit', compact('image', 'page_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, $id)
    {
        //
        $image = Image::findOrFail($id);
        $input = Request::all();


        $image->update($input);

        return redirect('imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = Image::findOrFail($id);

        if ($image->delete()) {
            return redirect('imagenes');
        }
    }
}
