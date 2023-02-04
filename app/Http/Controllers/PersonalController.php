<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonalController extends Controller
{
    public function index()
    {
        //
        return Inertia::render('Personal/Index', [            
            'personal'=>Personal::with('user:id,name')->latest()->get(),
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
        'surname'=> [' required' ],
        'first_name'=>[' required' ],
        'middle_name'=>'',
        'phone_number'=>[' required' ],
        'geo_political_zone'=>[' required' ],
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
        'gender'=>['required']
        ]);
        $request->user()->personal()->create($validated);
        return redirect(route('personal.index'));
    }
}
