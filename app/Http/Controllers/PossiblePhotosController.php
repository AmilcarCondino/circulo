<?php

namespace App\Http\Controllers;

use App\Image;
use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PossiblePhoto;
use App\Http\Requests\PossiblePhotoRequest;

class PossiblePhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $possible_photos = PossiblePhoto::orderBy('created_at', 'ASC')->get();

        return view('possible_photos.index', compact('possible_photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $possible_photos = new PossiblePhoto();
        $images_list = array( '0' => 'Seleccione una Imagen') + Image::lists('id', 'id')->all();

        return view('possible_photos.create', compact('images_list', 'possible_photos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PossiblePhotoRequest $request)
    {
        //
        $input = Request::all();

        PossiblePhoto::create($input);

        return redirect('fotos_posibles');
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
        $possible_photos = PossiblePhoto::findOrFail($id);

        $images_list = array( '0' => 'Seleccione una Imagen') + Image::lists('id')->all();

        return view('possible_photos.edit', compact('images_list', 'possible_photos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PossiblePhotoRequest $request, $id)
    {
        //
        $possible_photos = PossiblePhoto::findOrFail($id);
        $input = Request::all();


        $possible_photos->update($input);

        return redirect('fotos_posibles');
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
        $possible_photos = PossiblePhoto::findOrFail($id);

        if ($possible_photos->delete()) {
            return redirect('fotos_posibles');
        }
    }
}
