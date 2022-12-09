<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    function __construct()
    {
         $this->middleware('permission:doctor-list|doctor-create|doctor-edit|doctor-delete', ['only' => ['index','show']]);
         $this->middleware('permission:doctor-create', ['only' => ['create','store']]);
         $this->middleware('permission:doctor-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:doctor-delete', ['only' => ['destroy']]);
    }



    public function index()
    {


        $doctors = User::where('job' , 'Doctor')->paginate(5);
        return view('doctors.index',compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index')
                        ->with('success','doctor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        return view('doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
         request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index')
                        ->with('success','doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')
                        ->with('success','doctor deleted successfully');
    }
}
