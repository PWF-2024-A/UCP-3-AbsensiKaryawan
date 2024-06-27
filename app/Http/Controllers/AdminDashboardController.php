<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $total_users = User::count(); // Mengambil jumlah total pengguna terdaftar
        return view('admin.dashboard',
        compact('total_users')
        );
    }
}
