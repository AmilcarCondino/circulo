<?php

namespace App\Http\Controllers;

use App\Project;
use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Module;
use App\Http\Requests\ModuleRequest;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modules = Module::where('project_id', '=', $_GET)->get();

        $existing_modules_count = Module::where('project_id', '=', $_GET)->count();
        $projected_modules = Project::where('id', '=', $_GET)->pluck('projected_total_modules');
        $modules_count = $projected_modules - $existing_modules_count;

        return view('modules.index', compact('modules', 'modules_count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $modules = new Module();
        $projects_list = Project::lists('name', 'id');
        $parents_module_list = Module::lists('name', 'id');

        return view('modules.create', compact('projects_list', 'parents_module_list', 'modules'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuleRequest $request)
    {
        //
        $input = $request->all();

        Module::create($input);

        return redirect('modulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
        $projects_list = Project::lists('name', 'id');
        $parents_module_list = Module::lists('name', 'id');

        return view('modules.edit', compact('module', 'projects_list', 'parents_module_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Module $module, ModuleRequest $request)
    {
        //
        $input = $request->all();

        $module->update($input);

        return redirect('modulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
        if ($module->delete()) {
            return redirect('modulos');
        }
    }

    /**
     * Display a listing of the resource based on projects.
     *
     * @return Response
     */
    public function project(Project $project)
    {
        $module = $project->modules;
        return view('modules.index', compact('module'));
    }

    /**
     * Display a listing of the resource based on modules.
     *
     * @return Response
     */
    public function module(Module $module_id)
    {
        $module = $module_id->modules;
        return view('modules.index', compact('module'));
    }
}
