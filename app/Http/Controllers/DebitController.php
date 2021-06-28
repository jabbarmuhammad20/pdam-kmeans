<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\User;
use App\Models\Debitair;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    // melihat daftar data untuk admin
    public function index()
    {
        $users = User::all();
        return view('debit_air/admin_daftarDebitAir',['users'=>$users]);
    }

    public function admin_riwayat_debit_air()
    {
        $debitair = Debitair::all();
        return view('debit_air/admin_riwayatDebitAir',['debitair'=>$debitair]);
    }
    // Melihat daftar debit air menurut pelanggan
    public function pelanggan_index($id)
    {
        $debit_air= Debitair::where('user_id', Auth::user()->id)->paginate(10);
        return view('/debit_air/pelanggan_daftarDebitAir', ['debit_air' =>$debit_air]);
    }

    public function admin_tambahDebitAir($id)
    {
        $users = User::findOrFail($id);
        return view('debit_air/admin_tambahDebitAir',['users'=>$users]);
    }
    public function admin_debit_store (Request $request){
        $debit_air = new \App\Models\Debitair;
        $debit_air->user_id = $request->user_id;
        $debit_air->bulan = $request->bulan;
        $debit_air->debit_air = $request->debit_air;
        $debit_air->keasaman = $request->keasaman;
        $debit_air->ket = $request->ket;
        $debit_air->save();
        return redirect()->to('/daftar_debitAir')->with('toast_success', 'Debit Air berhasil Ditambah!');
    }

    public function destroy($id)
    {
        DB::table('debit_air')->where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Data Debit Berhasil Dihapus']);
    }
}
