<?php

namespace App\Http\Controllers;

use App\Models\Govap;
use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class GovapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show me this page on the brozer..
        return Inertia::render('Gov/Index', [
            'govap' => Govap::with('user:id,name')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'bio_id' => ['bio_id'],
            'department' => ['required'],
            'unit' => ['required'],
            'type_of_appointment' => ['required'],
            'date_of_first_app' => ['required'],
            'designation_post' => ['required'],
            'salary_per_annum_at_date_of_first_app' => ['required'],
            'salary_scale' => ['required'],
            'grade_level' => ['required'],
            'step' => ['required']
        ]);
        // test the form sho
        Govap::create($validated,[
            'bio_id' => 1,
            'department' => $request->department,
            'unit' => $request->unit,
            'type_of_appointment' => $request->type_of_appointment,
            'date_of_first_app' => $request->date_of_first_app,
            'designation_post' => $request->designation_post,
            'salary_per_annum_at_date_of_first_app' => $request->salary_per_annum_at_date_of_first_app,
            'salary_scale' => $request->salary_scale,
            'grade_level' => $request->grade_level,
            'step' => $request->step
        ]);
        // $bio = Bio::find($request->bio_id);
        // $govap = $bio->govaps()->create($validated);

        //the redirect route doesn't exist show me the route u wan test
    
        return Redirect::route('gov.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Govap  $govap
     * @return \Illuminate\Http\Response
     */
    public function show(Govap $govap)
    {
        return Inertia::render('Bio/staffshow',[
            'gov' => $govap,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Govap  $govap
     * @return \Illuminate\Http\Response
     */
    public function edit(Govap $govap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Govap  $govap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Govap $govap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Govap  $govap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Govap $govap)
    {
        //
    }
}