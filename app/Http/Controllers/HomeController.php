<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function tiket_wisata()
    {
        return view('tiket_wisata');
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function beli_wisata(Request $request)
    {
        $tiket = DB::table('tikets')
            ->where('id_tiket', 1)
            ->get();
        foreach ($tiket as $har) {
            $ga = $har->harga_tiket;
        }

        DB::table('pemesanans')->insert([
            'user_id' => $request->user_id,
            'fasilitas_id' => 0,
            'tiket_id' => 1,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'jumlah_tiket' => $request->jumlah_tiket,
            'jumlah_hari' => 0,
            'total_harga' => $request->jumlah_tiket * $ga,
            'nama_customer' => $request->nama_customer,
            'status' => 0,
            'tanggal' => date('Y-m-d')
        ]);
        $id_pesan = DB::table('pemesanans')
            ->where('user_id', $request->user_id)
            ->where('status', 0)
            ->orderByDesc('tanggal')
            ->limit(1)
            ->get();
        foreach ($id_pesan as $id) {
            $get = $id->id_pemesanan;
        }
        return redirect('/detail_pemesanan' . '/' . $get . '');
    }
    public function detail_pemesanan($id_pesanan)
    {
        // $id = Auth::user()->id;
        $get_pesanan = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->where('pemesanans.id_pemesanan', $id_pesanan)
            ->get();
        $data = [
            'pesanan' => $get_pesanan,
        ];
        return view('detail_pemesanan', $data);
    }
    public function bayar_tiket($id_tiket)
    {
        $bayar_tiket = DB::table('pemesanans')
            ->join('fasilitass', 'pemesanans.fasilitas_id', '=', 'fasilitass.id_fasilitas')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')
            ->join('tikets', 'pemesanans.tiket_id', '=', 'tikets.id_tiket')
            ->where('pemesanans.id_pemesanan', $id_tiket)
            ->get();
        $data = [
            'bayar_tiket' => $bayar_tiket,
        ];
        return view('bayar_tiket', $data);
    }
    public function proses_bayar(Request $request)
    {
        $this->validate($request, [
            'bukti_pembayaran' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $bukti = explode('.', $bukti_pembayaran->getClientOriginalName());
        $nama_bukti = "bukti_" . $request->nama_customer . "_" . time() . "." . end($bukti);
        $tujuan_upload = 'bukti_pembayaran/';
        $bukti_pembayaran->move($tujuan_upload, $nama_bukti);

        $get_kode = DB::table('pembayarans')
            ->orderByDesc('pembayarans.kode_pembayaran')
            ->limit(1)
            ->get();

        if ($get_kode->count() > 0) {
            foreach ($get_kode as $kode) {
                $ex = (explode('_', $kode->kode_pembayaran));
                $get = (intval($ex[1])) + 1;
                $kd = sprintf("%03s", $get);
            }
        } else {
            $kd = "001";
        }

        DB::table('pembayarans')->insert([
            'pemesanan_id' => $request->pemesanan_id,
            'kode_pembayaran' => 'KD_' . $kd,
            'tiket_id' => $request->tiket_id,
            'nama_customer' => $request->nama_customer,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => 1,
            'bukti_pembayaran' => $nama_bukti,
            'tanggal_pembayaran' => date('Y-m-d'),
        ]);
        DB::table('pemesanans')->where('id_pemesanan', $request->pemesanan_id)->update([
            'status' => 1,
            'kode_pembayaran' => 'KD_' . $kd
        ]);
        return redirect('/detail_pemesanan' . '/' . $request->pemesanan_id . '');
    }
    public function cetak_tiket($id_tiket)
    {
        $kode = DB::table('pembayarans')
            ->join('pemesanans', 'pemesanans.id_pemesanan', '=', 'pembayarans.pemesanan_id')
            // ->join('users', 'pemesanans.id_pemesanan', '=', 'users.id')
            ->where('pembayarans.pemesanan_id', $id_tiket)
            ->get();
        $data = [
            'cetak' => $kode,
        ];
        return view('cetak_tiket', $data);
    }

    public function tiket_camping()
    {
        $fasilitas = DB::table('fasilitass')
            ->get();
        $data = [
            'fasilitas' => $fasilitas,
        ];
        return view('tiket_camping', $data);
    }
    public function beli_camping(Request $request)
    {
        $tiket = DB::table('tikets')
            ->where('id_tiket', 1)
            ->get();
        foreach ($tiket as $har) {
            $ga = $har->harga_tiket;
        }
        $fasilitas = DB::table('fasilitass')
            ->where('id_fasilitas', $request->fasilitas_id)
            ->get();
        foreach ($fasilitas as $fas) {
            $litas = $fas->harga_fasilitas;
        }

        DB::table('pemesanans')->insert([
            'user_id' => $request->user_id,
            'fasilitas_id' => $request->fasilitas_id,
            'tiket_id' => 2,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'jumlah_tiket' => $request->jumlah_tiket,
            'jumlah_hari' => $request->jumlah_hari,
            'total_harga' => ($request->jumlah_tiket * $ga) + $litas,
            'nama_customer' => $request->nama_customer,
            'status' => 0,
            'tanggal' => date('Y-m-d')
        ]);
        $id_pesan = DB::table('pemesanans')
            ->where('user_id', $request->user_id)
            ->where('status', 0)
            ->orderByDesc('tanggal')
            ->limit(1)
            ->get();
        foreach ($id_pesan as $id) {
            $get = $id->id_pemesanan;
        }
        return redirect('/detail_pemesanan' . '/' . $get . '');
    }
}
