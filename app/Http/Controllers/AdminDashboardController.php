<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil tanggal dari request, jika tidak ada gunakan tanggal hari ini
        $date = $request->input('date', Carbon::today()->toDateString());

        // Menghitung jumlah total pengguna terdaftar
        $total_users = User::count();

        // Menghitung jumlah presence pada tanggal yang diberikan
        $total_presence = Presence::whereDate('created_at', $date)->count();

        // Menghitung jumlah presence bulan ini
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthly_presence = Presence::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        // Menghitung jumlah presence hari ini
        $today = Carbon::today();
        $today_presence = Presence::whereDate('created_at', $today)->count();

        // Mengirim data ke view
        return view('admin.dashboard', compact('total_users', 'total_presence', 'monthly_presence', 'today_presence', 'date'));
    }
}
