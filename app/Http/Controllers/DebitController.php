<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\DebitAir;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('debit_air/admin_daftarDebitAir',['users'=>$users]);
    }

    public function admin_tambahDebitAir($id)
    {
        $users = User::findOrFail($id);
        return view('debit_air/admin_tambahDebitAir',['users'=>$users]);
    }

}
