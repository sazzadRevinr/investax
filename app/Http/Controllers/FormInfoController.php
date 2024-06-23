<?php

namespace App\Http\Controllers;

use App\Models\FormInfo;
use Illuminate\Http\Request;

class FormInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = FormInfo::latest()->paginate(10);
        return view('admin.forms.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FormInfo $formInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormInfo $formInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormInfo $formInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormInfo $formInfo)
    {
        //
    }
}
