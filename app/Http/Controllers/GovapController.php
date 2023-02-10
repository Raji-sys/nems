<?php

namespace App\Http\Controllers;

use App\Models\Govap;
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
        return Inertia::render('Gov/Index', [
            'govaps' => Govap::with('bio')->latest()->get(),
            // 'govap' => Govap::latest()->get(),
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
    public function store(Request $request)
    {
        $validated = $request->validate([

            'department' => ['required'],
            'unit' => ['required'],
            'type_of_appointment' => ['required'],
            'date_of_first_app' => ['required'],
            'designation_post' => ['required'],
            'salary_per_annum_at_date_of_first_app' => ['required'],
            'salary_scale' => ['required'],
            'grade_level' => ['required'],
            'step' => ['required'],
            'current_post' => ['required'],
            'promoted_date' => ['required'],
            'increment_date' => ['required'],
            'exec_confirmation_date' => ['required'],
            'exec_appointment_date' => ['required'],
            'exec_status_current_out_of_office' => ['required']
        ]);

        Govap::create($validated, [
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
        return Inertia::render('Bio/staffshow', [
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