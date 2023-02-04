<?php

namespace App\Http\Controllers;

use App\Models\Kin;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Kins/Index', [            
            'kins'=>Kin::with('user:id,name')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'relationship'=>'required',
            // 'passport'=>'required',
            'transfer_by'=>'required',
            'transfer_date'=>'required',
            ]);
            $request->user()->kins()->create($validated);
            return redirect(route('kin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kin  $kin
     * @return \Illuminate\Http\Response
     */
    public function show(Kin $kin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kin  $kin
     * @return \Illuminate\Http\Response
     */
    public function edit(Kin $kin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kin  $kin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kin $kin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kin  $kin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kin $kin)
    {
        //
    }
}
