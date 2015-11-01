<?php

namespace App\Http\Controllers;

use App\Module;
use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

use App\Page;
use App\Http\Requests\PageRequest;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::where('module_id', '=', $_GET)->get();

        $existing_pages_count = Page::where('module_id', '=', $_GET)->count();
        $projected_pages = Module::where('id', '=', $_GET)->pluck('projected_total_pages');
        $pages_count = $projected_pages - $existing_pages_count;

        return view('pages.index', compact('pages', 'pages_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pages = new Page();
        $module_list = Module::lists('name', 'id');

        return view('pages.create', compact('module_list', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        //
        $input = $request->all();

        Page::create($input);

        return redirect('paginas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //


        return view('pages.show', compact('page', 'images'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
        $module_list = Module::lists('name', 'id');

        return view('pages.edit', compact('page', 'module_list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Page $page, PageRequest $request)
    {
        //
        $input = $request->all();

        $page->update($input);

        return redirect('paginas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
        if ($page->delete()) {
            return redirect('paginas');
        }
    }

    /**
     * Display a listing of the resource based on modules.
     *
     * @return Response
     */
    public function module(Module $module)
    {
        $page = $module->pages;
        return view('pages.index', compact('page'));
    }
}
