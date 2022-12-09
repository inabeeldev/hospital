<?php

namespace App\Http\Controllers;

use App\Models\ProcedureName;
use Illuminate\Http\Request;

class ProcedureNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = ProcedureName::all();
        return view('procedure_name.index',compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('procedure_name.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name' => 'required'
        ]);

        ProcedureName::create($request->all());

        return redirect()->route('procedure_names.index')
                        ->with('success','Procedure Name created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedure = ProcedureName::where('id',$id)->first();
        return view('procedure_name.show',compact('procedure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedure = ProcedureName::where('id',$id)->first();
        return view('procedure_name.edit',compact('procedure'));
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
        // dd($request->all());
         request()->validate([
            'name' => 'required'
        ]);
        $procedure = ProcedureName::where('id',$id)->first();
        $procedure->update($request->all());

        return redirect()->route('procedure_names.index')
                        ->with('success','Procedure Name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedure = ProcedureName::where('id',$id)->first();
        $procedure->delete($id);

        return redirect()->route('procedure_names.index')
                        ->with('success','Procedure Name deleted successfully');
    }
}
