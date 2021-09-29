<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function data_pemesanan()
    {
        $pemesanan = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            // ->join('pembayarans', 'pemesanans.kode_pembayaran', '=', 'pembayarans.kode_pembayaran')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->where('pemesanans.status', 0)
            ->get();
        $data = [
            'pemesanan' => $pemesanan,
        ];
        return view('admin/data_pemesanan', $data);
    }
    
    public function detail_pemesanan($kode)
    {
        $pemesanan = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            // ->join('pembayarans', 'pemesanans.kode_pembayaran', '=', 'pembayarans.kode_pembayaran')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->where('pemesanans.id_pemesanan', $kode)
            ->get();
        $data = [
            'pemesanan' => $pemesanan,
        ];
        return view('admin/detail_pemesanan', $data);
    }

    public function data_pembelian()
    {
        $pembelian = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            ->join('pembayarans', 'pemesanans.kode_pembayaran', '=', 'pembayarans.kode_pembayaran')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->get();
        $data = [
            'pembelian' => $pembelian,
        ];
        return view('admin/data_pembelian', $data);
    }
    public function bayar_tiket($kode)
    {
        DB::table('pembayarans')
        ->where('kode_pembayaran', $kode)
        ->update([
            'metode_pembayaran' => 1,
            'bukti_pembayaran' => '',
            'status_pembayaran' => 1,
        ]);
        return redirect('admin/data_pembelian');
    }
    public function aduan_tiket($kode)
    {
        DB::table('pembayarans')
        ->where('kode_pembayaran', $kode)
        ->update([
            'status_pembayaran' => 0,
        ]);
        return redirect('admin/data_pembelian');
    }
    public function detail_pembelian($kode)
    {
        $pembelian = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            ->join('pembayarans', 'pemesanans.kode_pembayaran', '=', 'pembayarans.kode_pembayaran')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->where('pembayarans.kode_pembayaran', $kode)
            ->get();
        $data = [
            'pembelian' => $pembelian,
        ];
        return view('admin/detail_pembelian', $data);
    }
    public function hapus_pembelian($kode)
    {
        DB::table('pembayarans')->where('kode_pembayaran', $kode)->delete();
        DB::table('pemesanans')->where('kode_pembayaran', $kode)->delete();
        return redirect('/admin/data_pembelian');
    }

    public function data_fasilitas()
    {
        $fasilitas = DB::table('fasilitass')
            // ->where('harga_fasilitas', '> 0')
            ->get();
        $data = [
            'fasilitas' => $fasilitas,
        ];
        return view('admin/data_fasilitas', $data);
    }
    public function edit_fasilitas($id)
    {
        $fasilitas = DB::table('fasilitass')
            ->where('id_fasilitas', $id)
            ->get();
        $data = [
            'fasilitas' => $fasilitas,
        ];
        return view('admin/edit_fasilitas', $data);
    }
    public function update_fasilitas(Request $request)
    {
        $this->validate($request, [
            'gambar_fasilitas' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $gambar = $request->file('gambar_fasilitas');
        if (!empty($gambar)) {
            $img = explode('.', $gambar->getClientOriginalName());
            $nama = "bukti_" . $request->nama_fasilitas . "_" . time() . "." . end($img);
            $tujuan_upload = 'assets/';
            $gambar->move($tujuan_upload, $nama);
        } else {
            $nama = $request->old_gambar;
        }
        DB::table('fasilitass')->where('id_fasilitas', $request->id_fasilitas)->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'harga_fasilitas' => $request->harga_fasilitas,
            'deskripsi_fasilitas' => $request->deskripsi_fasilitas,
            'gambar_fasilitas' => $nama,
        ]);
        return redirect('/admin/data_fasilitas');
    }
    public function hapus_fasilitas($id)
    {
        DB::table('fasilitass')->where('id_fasilitas', $id)->delete();
        return redirect('/admin/data_fasilitas');
    }


    public function data_customer()
    {
        $customer = DB::table('users')
            ->where('is_admin', 0)
            ->get();
        $data = [
            'customer' => $customer,
        ];
        return view('admin/data_customer', $data);
    }
    public function hapus_customer($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/data_customer');
    }

    public function data_admin()
    {
        $customer = DB::table('users')
            ->where('is_admin', 1)
            ->get();
        $data = [
            'admin' => $customer,
        ];
        return view('admin/data_admin', $data);
    }
    public function hapus_admin($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/data_admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
