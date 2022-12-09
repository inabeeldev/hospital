<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:reference-list|reference-create|reference-edit|reference-delete', ['only' => ['index','show']]);
         $this->middleware('permission:reference-create', ['only' => ['create','store']]);
         $this->middleware('permission:reference-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:reference-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $references = Reference::latest()->paginate(5);
        return view('references.index',compact('references'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.create');
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
            'name' => 'required'
        ]);

        Reference::create($request->all());

        return redirect()->route('references.index')
                        ->with('success','reference created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        return view('references.show',compact('reference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        return view('references.edit',compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
         request()->validate([
            'name' => 'required'
        ]);

        $reference->update($request->all());

        return redirect()->route('references.index')
                        ->with('success','reference updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();

        return redirect()->route('references.index')
                        ->with('success','reference deleted successfully');
    }
}
