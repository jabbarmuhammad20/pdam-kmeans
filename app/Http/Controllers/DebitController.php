<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    public function index()
    {
        $users = User::all();
return view('debit_air/admin/daftar_debitAir',['users'=>$users]);
    }
}
