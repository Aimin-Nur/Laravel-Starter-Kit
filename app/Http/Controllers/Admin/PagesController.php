<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function welcome()
    {
        return view('custom.pages.starter');
    }

    public function comingSoon()
    {
        return view('custom.pages.coming-soon');
    }

    public function timeline()
    {
        return view('custom.pages.timeline');
    }

    public function pricing()
    {
        return view('custom.pages.pricing');
    }

    public function maintenance()
    {
        return view('custom.pages.maintenance');
    }

    public function notFound()
    {
        return view('custom.pages.error-404');
    }

    public function signin()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.register');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function lockScreen()
    {
        return view('auth.lock-screen');
    }

    public function widget()
    {
        return view('custom.widgets');
    }



}
