<?php

namespace App\Http\Controllers;

use App\Module;
use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $pages = Page::orderBy('page_number', 'ASC')->get();

        return view('pages.index', compact('pages'));
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
        $module_list = array( '0' => 'Seleccione un Modulo') + Module::lists('name', 'id')->all();

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
        $input = Request::all();

        Page::create($input);

        return redirect('paginas');
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
        $page = Page::findOrFail($id);

        $module_list =array( '0' => 'Modulo Padre') + Module::lists('name', 'id')->all();

        return view('pages.edit', compact('page', 'module_list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        //
        $page = Page::findOrFail($id);
        $input = Request::all();


        $page->update($input);

        return redirect('paginas');
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
        $page = Page::findOrFail($id);

        if ($page->delete()) {
            return redirect('paginas');
        }
    }
}
