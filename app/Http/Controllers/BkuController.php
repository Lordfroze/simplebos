<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Bku;



class BkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // otentikasi jika user belum login
        if (!Auth::check()) {
            return redirect('login');
        }
        // tampilkan table bku
        $tasks = Bku::where('active', '=', true)
            ->paginate(10);

        // Membuat array untuk menyimpan data
        $view_data = [
            'tasks' => $tasks,
        ];

        // Menampilkan view dengan data
        return view('dashboard.bku.index', $view_data);
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
