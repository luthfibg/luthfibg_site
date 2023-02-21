<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Http\Response;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guest = Guest::all();
        return response(view('home', compact('guest')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $storeGuest = $request->validate([
        //     'name' => 'required|max:255',
        // ]);
        // $guest = Guest::create($storeGuest);
        // return redirect('/home')->with('completed', 'Thank you, guest name has been saved');

        $validator = Validator::make($request->all(), [
            'guest_name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response(redirect('/')->withInput()->withErrors($validator));
        }

        $guest = new Guest;
        $guest->name = $request->guest_name;
        $request->merge(['name' => $guest->name]);
        $guest->save();

        return response(redirect()->intended('home')->with('success', 'Guest allowed enter'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    // public function show(Guest $guest)
    // {
    //     $guests = Guest::orderBy('created_at', 'asc')->get();
    //     return response(view('guests.show', compact('guests')));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guest::findOrFail($id);
        return response(view('edit', compact('guest')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateGuest = $request->validate([
            'name' => 'required|max:255',
        ]);
        Guest::whereId($id)->update($updateGuest);
        return redirect('guest')->with('completed', 'Guest name has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();
        return redirect('/guest')->with('completed', 'Guest has been deleted');
    }
}