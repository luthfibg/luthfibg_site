<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthCustomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response(view('layouts.authentication'));
    }

    /**
     * Process the form for creating a new session.
     */
    public function login(Request $request): RedirectResponse
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect('home/downloadcv')->with('success', 'Login berhasil, sekarang anda dapat mendownload CV');
        } else {
            return redirect('auth')->withErrors('Nama email atau password tidak valid');
        }
    }

    /**
     * Logging out session.
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('auth')->with('success', 'Anda berhasil keluar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return redirect();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        return redirect();
    }
}