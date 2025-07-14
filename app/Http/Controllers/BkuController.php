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
        // otentikasi jika user belum login
        if (!Auth::check()) {
            return redirect('login');
        }

        // mengarahkan ke halaman create
        return view('dashboard.bku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // otentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }

        // menerima data dari form
        $tanggal = $request->input('tanggal') ?? now()->toDateString();  //Set tanggal to current date if not provided
        $nomorbukti = $request->input('nomorbukti');
        $nomorkode = $request->input('nomorkode');
        $hari = $request->input('hari');
        $pelunasan = $request->input('pelunasan');
        $pembelian = $request->input('pembelian');
        $uraian = $request->input('uraian');
        $jumlah = $request->input('jumlah');
        $terbilang = $request->input('terbilang');

        // simpan data ke database
        $bku = Bku::create([
            'tanggal' => $tanggal,
            'nomorbukti' => $nomorbukti,
            'nomorkode' => $nomorkode,
            'hari' => $hari,
            'pelunasan' => $pelunasan,
            'pembelian' => $pembelian,
            'uraian' => $uraian,
            'jumlah' => $jumlah,
            'terbilang' => $terbilang,
        ]);

        // kirim telegram setelah menyimpan data
        // $this->notify_telegram($items);  // agar tidak terlalu panjang dipisah ke fungsi notify_telegram dibawah

        return redirect('/dashboard/bku')->with('success', 'Data Sukses Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tampilkan detail id bku
        // otentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }
        // menampilkan halaman detail items
        $bkus = Bku::findOrFail($id);
        return view('dashboard.bku.show', compact('bkus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        //otentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }

        // menampilkan halaman edit items
        $bkus = Bku::findOrFail($id);
        return view('dashboard.bku.edit', compact('bkus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //otentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }

        // menerima data dari form
        $tanggal = $request->input('tanggal') ?? now()->toDateString();  //Set tanggal to current date if not provided
        $nomorbukti = $request->input('nomorbukti');
        $nomorkode = $request->input('nomorkode');
        $hari = $request->input('hari');
        $pelunasan = $request->input('pelunasan');
        $pembelian = $request->input('pembelian');
        $uraian = $request->input('uraian');
        $jumlah = $request->input('jumlah');
        $terbilang = $request->input('terbilang');

        // update data
        Bku::where('id', $id)->update([
            'updated_at' => $tanggal,
            'nomorbukti' => $nomorbukti,
            'nomorkode' => $nomorkode,
            'hari' => $hari,
            'pelunasan' => $pelunasan,
            'pembelian' => $pembelian,
            'uraian' => $uraian,
            'jumlah' => $jumlah,
            'terbilang' => $terbilang,
        ]);
        
        return redirect('/dashboard/bku')->with('success', 'Data Sukses Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ontentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }

        // delete data
        $bkus = Bku::findOrFail($id);
        $bkus->delete();
        return redirect('/dashboard/bku')->with('error', 'Data Sukses Dihapus');
    }

    public function kwitansi(string $id)
    {
        //tampilkan detail id bku
        // otentikasi user
        if (!Auth::check()) {
            return redirect('login');
        }
        // menampilkan halaman detail items
        $bkus = Bku::findOrFail($id);
        return view('dashboard.bku.kwitansi', compact('bkus'));
    }

}
