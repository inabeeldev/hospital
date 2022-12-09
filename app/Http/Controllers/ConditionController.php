<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:condition-list|condition-create|condition-edit|condition-delete', ['only' => ['index','show']]);
         $this->middleware('permission:condition-create', ['only' => ['create','store']]);
         $this->middleware('permission:condition-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:condition-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $conditions = Condition::latest()->paginate(5);
        return view('conditions.index',compact('conditions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conditions.create');
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

        Condition::create($request->all());

        return redirect()->route('conditions.index')
                        ->with('success','condition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        return view('conditions.show',compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(condition $condition)
    {
        return view('conditions.edit',compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
         request()->validate([
            'name' => 'required'
        ]);

        $condition->update($request->all());

        return redirect()->route('conditions.index')
                        ->with('success','condition updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        $condition->delete();

        return redirect()->route('conditions.index')
                        ->with('success','condition deleted successfully');
    }
}
