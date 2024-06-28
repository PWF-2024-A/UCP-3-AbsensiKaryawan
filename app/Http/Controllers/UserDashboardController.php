<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user_name = auth()->user()->name;

        return view('user.dashboard', [
            "title" => "Dashboard",
            'active' => 'dashboard',
            'presence' => Presence::all(),
            'presence_by_name' => Presence::where('name', $user_name)->get(),
        ]);
    }

    public function reports()
    {
        $user_name = auth()->user()->name;

        return view('report.index', [
            "title" => "Dashboard | Reports",
            'active' => 'dashboard',
            'presences' => Presence::all(),
            'presence_by_name' => Presence::where('name', $user_name)->get(),
        ]);
    }
}
