<?php

namespace App\Http\Controllers;

use App\Models\Studyplan;
use Illuminate\Http\Request;

/**
 * Class StudyplanController
 * @package App\Http\Controllers
 */
class StudyplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studyplans = Studyplan::paginate();

        return view('studyplan.index', compact('studyplans'))
            ->with('i', (request()->input('page', 1) - 1) * $studyplans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studyplan = new Studyplan();
        return view('studyplan.create', compact('studyplan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Studyplan::$rules);

        $studyplan = Studyplan::create($request->all());

        return redirect()->route('studyplans.index')
            ->with('success', 'Studyplan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studyplan = Studyplan::find($id);

        return view('studyplan.show', compact('studyplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studyplan = Studyplan::find($id);

        return view('studyplan.edit', compact('studyplan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Studyplan $studyplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studyplan $studyplan)
    {
        request()->validate(Studyplan::$rules);

        $studyplan->update($request->all());

        return redirect()->route('studyplans.index')
            ->with('success', 'Studyplan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $studyplan = Studyplan::find($id)->delete();

        return redirect()->route('studyplans.index')
            ->with('success', 'Studyplan deleted successfully');
    }
}
