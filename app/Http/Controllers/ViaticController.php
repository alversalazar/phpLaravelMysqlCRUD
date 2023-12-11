<?php

namespace App\Http\Controllers;

use App\Models\Viatic;
use Illuminate\Http\Request;

/**
 * Class ViaticController
 * @package App\Http\Controllers
 */
class ViaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viatics = Viatic::paginate();

        return view('viatic.index', compact('viatics'))
            ->with('i', (request()->input('page', 1) - 1) * $viatics->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viatic = new Viatic();
        return view('viatic.create', compact('viatic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Viatic::$rules);

        $viatic = Viatic::create($request->all());

        return redirect()->route('viatics.index')
            ->with('success', 'Viatic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viatic = Viatic::find($id);

        return view('viatic.show', compact('viatic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viatic = Viatic::find($id);

        return view('viatic.edit', compact('viatic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viatic $viatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viatic $viatic)
    {
        request()->validate(Viatic::$rules);

        $viatic->update($request->all());

        return redirect()->route('viatics.index')
            ->with('success', 'Viatic updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $viatic = Viatic::find($id)->delete();

        return redirect()->route('viatics.index')
            ->with('success', 'Viatic deleted successfully');
    }
}
