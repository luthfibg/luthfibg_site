<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the item card.
     */
    public function index()
    {
        $data = Item::orderby('name', 'desc')->get();
        return view('pages.dashboard', ['data' => $data]);
    }

    /**
     * Show the form for creating a new item card.
     */
    public function create(): Response
    {
        return response(view('pages.add_item'));
    }

    /**
     * Store a newly created item card in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Session::flash('name', $request->name);
        Session::flash('subname', $request->subname);
        Session::flash('category', $request->category);
        Session::flash('sub_category', $request->sub_category);
        Session::flash('effort_level', $request->effort_level);
        Session::flash('percentage', $request->percentage);
        Session::flash('status', $request->status);
        Session::flash('description', $request->description);
        Session::flash('start_date', $request->start_date);

        $request->validate([
            'name' => 'required|min:4|max:55',
            'subname' => 'required',
            'category' => 'required',
            // 'subcategory' => 'required',
            'effort_level' => 'required',
            'percentage' => 'required',
            'status' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Nama minimal terdiri atas 4 karakter selain spasi',
            'name.max' => 'Nama maksimal terdiri atas 55 karakter selain spasi',
            'subname.required' => 'Sub nama tidak boleh kosong',
            'category.required' => 'Anda harus memilih kategori',
            'effort_level.required' => 'Anda harus mencantumkan tingkat usaha',
            'percentage.required' => 'Anda harus mencantumkan persentase progres saat ini',
            'status.required' => 'Anda harus mencantumkan status saat ini',
            'description.required' => 'Anda harus mencantumkan deskripsi',
        ]);
        $data = [
            //left-side
            'name' => $request->name,
            'subname' => $request->subname,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'effort_level' => $request->effort_level,

            //right-side
            'percentage' => $request->percentage,
            'status' => $request->status,
            'description' => $request->description,
            'start_date' => $request->start_date,
        ];
        $tags = explode(",", $request->tags);
        $store = Item::create($data);
        $store->tag($tags);
        return redirect('home/dashboard/items')->with('success', 'Kartu berhasil ditambahkan');
    }

    /**
     * Display the specified item card.
     */
    public function show($id): Response
    {
        $item = Item::where('id', $id)->first();
        return response(view('pages.item_detail')->with('item', $item));
    }

    /**
     * Show the form for editing the specified item card.
     */
    public function edit($id): Response
    {
        $data = Item::where('id', $id)->first();
        return response(view('pages.edit_item')->with('data', $data));
    }

    /**
     * Update the specified item card in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        Session::flash('name', $request->name);
        Session::flash('subname', $request->subname);
        Session::flash('category', $request->category);
        Session::flash('sub_category', $request->sub_category);
        Session::flash('effort_level', $request->effort_level);
        Session::flash('percentage', $request->percentage);
        Session::flash('status', $request->status);
        Session::flash('description', $request->description);
        Session::flash('start_date', $request->start_date);

        $request->validate([
            'name' => 'required|min:4|max:55',
            'subname' => 'required',
            'category' => 'required',
            // 'subcategory' => 'required',
            'effort_level' => 'required',
            'percentage' => 'required',
            'status' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Nama minimal terdiri atas 4 karakter selain spasi',
            'name.max' => 'Nama maksimal terdiri atas 55 karakter selain spasi',
            'subname.required' => 'Sub nama tidak boleh kosong',
            'category.required' => 'Anda harus memilih kategori',
            'effort_level.required' => 'Anda harus mencantumkan tingkat usaha',
            'percentage.required' => 'Anda harus mencantumkan persentase progres saat ini',
            'status.required' => 'Anda harus mencantumkan status saat ini',
            'description.required' => 'Anda harus mencantumkan deskripsi',
        ]);
        $data = [
            //left-side
            'name' => $request->name,
            'subname' => $request->subname,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'effort_level' => $request->effort_level,

            //right-side
            'percentage' => $request->percentage,
            'status' => $request->status,
            'description' => $request->description,
            'started_at' => $request->start_date,
        ];

        $item = Item::find($id);
        $tags = explode(",", $request->tags);
        $item->retag($tags);
        Item::where('id', $id)->update($data);

        // $user1 = Auth::user();        
        // $user2 = Input::get('id');
        // $user1->follow(User::find($user2));
        return redirect('home/dashboard/items')->with('success', 'Kartu berhasil diperbarui');
    }

    /**
     * Remove the specified item card from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Item::where('id', $id)->delete();
        return redirect('home/dashboard/items')->with('success', 'Kartu berhasil dibunuh');
    }
}