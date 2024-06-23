<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_forms = UserForm::latest()->with(['user','formInfo'])->paginate(10);
        return view('admin.UserForms.index',compact('user_forms'));
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
    public function show(UserForm $userForm)
    {
        $user_form = $userForm->load(['user','formInfo']);

        return view('admin.UserForms.details',compact('user_form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserForm $userForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserForm $userForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserForm $userForm)
    {
        //
    }
}
