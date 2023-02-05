<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\gov;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Bio/Index', [
            'bio' => Bio::with('user:id,name')->latest()->get(),
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
            'surname'=> ['required'],
            'first_name'=>['required'],
            'middle_name'=>[''],
            'phone_number'=>['required'],
            
            'geo_political_zone'=>['required'],
            'state'=>[' required' ],
            'lga'=>[' required' ],
            
            'spouse'=>['required'],
            'date_of_birth'=>['required'],
            'place_of_birth'=>['required'],
            'marital_status'=>['required'],
            'hobbies'=>['required'],
            'religion'=>['required'],
            'senatorial_district'=>['required'],
            'nationality'=>['required'],
            'permanent_home_address'=>['required'],
            'residential_address'=>['required'],
            'name_of_children'=>['required'],
            'number_of_children'=>['required'],
            'dob_of_children'=>['required'],
            'transferred_from'=>['required'],
            'transfer_date'=>['required'],
            'title'=>['required'],
            'staff_id'=>['required'],
            'gender'=>['required'],
            
            'next_of_kin_name1'=>['required'],
            'next_of_kin_phone1'=>['required'],
            'next_of_kin_email1'=>['required'],
            'next_of_kin_add1'=>['required'],
            'next_of_kin_relationship1'=>['required'],
            
            'next_of_kin_name2'=>['required'],
            'next_of_kin_phone2'=>['required'],
            'next_of_kin_email2'=>['required'],
            'next_of_kin_add2'=>['required'],
            'next_of_kin_relationship2'=>['required'],
            
            'name_of_primary'=>['required'],
            'date_obtained_pri'=>['required'],
            'primary_q_type'=>['required'],
            
            'name_of_secondary'=>[''],
            'date_obtained_sec'=>[''],
            'secondary_q_type'=>[''],
            
            'name_of_tertiary'=>[''],
            'date_obtained_ter'=>[''],
            'qualification_type'=>[''],
            
            'pro_awarding_ins1'=>[''],
            'pro_ins_address1'=>[''],
            'date_obtained_pro1'=>[''],
            'qualification_obtained1'=>[''],
            
            'pro_awarding_ins2'=>[''],
            'pro_ins_address2'=>[''],
            'date_obtained_pro2'=>[''],
            'qualification_obtained2'=>[''],
            
            'pro_awarding_ins3'=>[''],
            'pro_ins_address3'=>[''],
            'date_obtained_pro3'=>[''],
            'qualification_obtained3'=>[''],
            ]);
            $request->user()->bio()->create($validated);
            return redirect(route('govform'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function show(Bio $bio)
    {
        return Inertia::render('Bio/staffshow',[
            'bio' => $bio,

            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bio $bio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bio $bio)
    {
        //
    }
}
