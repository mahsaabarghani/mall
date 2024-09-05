<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $links = [];
        if ($user->role == 1) {
            $links = [
                'admin_panel' => route('superAdmin.index')];
        } elseif ($user->role == 2) {
            $links = [
                'admin_panel' => route('mallAdmin.index')];
        } elseif ($user->role == 3) {
            $links = [
                'admin_panel' => route('storeAdmin.index')];
        } elseif ($user->role == 4) {
            $links = [
                'admin_panel' => route('user.index')];
        }

        return view('index', compact('links'));
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
}
