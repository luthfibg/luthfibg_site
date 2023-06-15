<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AuthCustomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response(view('components.auth_card'));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCv(): Response
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
            'email' => 'required|email:rfc|string',
            'password' => 'required|min:6|max:12',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus mengandung karakter \'@\'',
            'email.string' => 'Format email seharusnya bukan nomor',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Panjang minimal password adalah 6 karakter',
            'password.max' => 'Panjang maksimal password adalah 12 karakter',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect('home/dashboard/items')->with('success', 'Autentikasi berhasil, selamat datang kembali di dashboard Muhamad Luthfi');
        } else {
            return redirect('auth-user')->withErrors('Nama email atau password tidak valid');
        }
    }


    /**
     * Process the form for creating a new session.
     */
    public function loginCv(Request $request): RedirectResponse
    {
        Session::flash('email', $request->emailsc);
        $request->validate([
            'email' => 'required|email:rfc|string',
            'password' => 'required|min:6|max:12',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus mengandung karakter \'@\'',
            'email.string' => 'Format email seharusnya bukan nomor',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Panjang minimal password adalah 6 karakter',
            'password.max' => 'Panjang maksimal password adalah 12 karakter',
        ]);

        $data_user = [
            'email' => $request->emailsc,
            'password' => $request->passwordsc,
        ];
        if (Auth::attempt($data_user)) {
            return redirect('home/dashboard/downloadcv')->with('success', 'Autentikasi berhasil, sekarang anda dapat mendownload CV');
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
        return redirect('auth-user')->with('success', 'Anda berhasil keluar');
    }

    /**
     * Display a listing of the resource.
     */
    public function register(): Response
    {
        return response(view('components.reg_card'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): RedirectResponse
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:rfc|string|unique:users',
            'password' => 'required|min:6|max:12',
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.string' => 'Nama tidak boleh mengandung angka',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus mengandung karakter \'@\'',
            'email.string' => 'Format email seharusnya bukan nomor',
            'email.unique' => 'Email tersebut telah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Panjang minimal password adalah 6 karakter',
            'password.max' => 'Panjang maksimal password adalah 12 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return redirect('home/dashboard/items')->with('success', 'Registrasi berhasil, selamat datang ' . Auth::user()->name . ', di akun barumu di dashboard Muhamad Luthfi');
        } else {
            return redirect('home/reg')->withErrors('Periksa kembali inputan anda');
        }
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