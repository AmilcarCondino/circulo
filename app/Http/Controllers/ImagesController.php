<?php

namespace App\Http\Controllers;


use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PossiblePhoto;
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

        $images = Image::where('page_id', '=', $_GET)->get();

        $possible_photos = PossiblePhoto::orderBy('created_at', 'ASC')->get();

        return view('images.index', compact('images', 'possible_photos'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $images = new Image();
        $page_list = Page::lists('page_number', 'id');
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
        $input = $request->all();

        Image::create($input);

        return redirect('imagenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
        $page_list = Page::lists('page_number', 'id');

        return view('images.edit', compact('image', 'page_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Image $image, ImageRequest $request)
    {
        //
        $input = $request->all();

        $image->update($input);

        return redirect('imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
        if ($image->delete()) {
            return redirect('imagenes');
        }
    }

    /**
     * Display a listing of the resource based on projects.
     *
     * @return Response
     */
    public function page(Page $page)
    {
        $image = $page->image;
        return view('pages.index', compact('image'));
    }
}
