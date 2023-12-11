<?php

namespace App\Http\Controllers;

use App\Models\Carrer;
use Illuminate\Http\Request;

/**
 * Class CarrerController
 * @package App\Http\Controllers
 */
class CarrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrers = Carrer::paginate();

        return view('carrer.index', compact('carrers'))
            ->with('i', (request()->input('page', 1) - 1) * $carrers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrer = new Carrer();
        return view('carrer.create', compact('carrer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Carrer::$rules);

        $carrer = Carrer::create($request->all());

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrer = Carrer::find($id);

        return view('carrer.show', compact('carrer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrer = Carrer::find($id);

        return view('carrer.edit', compact('carrer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Carrer $carrer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrer $carrer)
    {
        request()->validate(Carrer::$rules);

        $carrer->update($request->all());

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carrer = Carrer::find($id)->delete();

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer deleted successfully');
    }
}
