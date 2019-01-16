<?php

namespace App\Http\Controllers;

use App\Project;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // sort the results by most recent
        $projects = Project::latest()->paginate(5);
        return view('project.index', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // add authentication to project manager (admin only)
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'name' => 'required',
            'developer' => 'required',
            'status' => 'required',
            // 'priceList' => 'required',
            // 'pic' => 'required',
        ]);

        Project::create($request->all());
        return redirect()->route('project.index')->with('success', 'Project added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('project.detail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'developer' => 'required',
            'status' => 'required',
            // 'priceList' => 'required',
            // 'pic' => 'required',
        ]);

        $project = Project::find($id);
        $project->name = $request->get('name');
        $project->developer = $request->get('developer');
        $project->status = $request->get('status');
        // $project->priceList = $request->get('priceList');
        // $project->pic = $request->get('pic');
        $project->save();
        return redirect()->route('project.index')
            ->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('project.index')
            ->with('success', 'project deleted');
    }

    // search function
    public function search(Request $request)
    {
        $search = $request->get('search');
        $projects = DB::table('projects')->where('name', 'like', '%' . $search . '%')
            ->orWhere('developer', 'like', '%' . $search . '%')->paginate(5);
        return view('project.index', compact('projects'));
    }

}
