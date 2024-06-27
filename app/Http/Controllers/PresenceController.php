<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $latestPresence = Presence::where('name', $user->name)->latest()->first();

        return view('presensi.index', [
            "title" => "Dashboard | Absensi In",
            'active' => 'dashboard',
            'presence' => $latestPresence,
            "absensi_in" => $latestPresence ? $latestPresence->in : '-',
            "absensi_out" => $latestPresence ? $latestPresence->out : '-',
            'users' => User::where('id', $user->id)->get(),
            'divisions' => Division::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Form for creating a new presence will be handled here if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'divisions_id' => 'required|exists:divisions,id',
            'status' => 'required',
            'image' => 'nullable|image|file|max:1024',
            'reason' => 'nullable',
            'date' => 'required|date',
            'in' => 'required|date_format:H:i',
            'out' => 'nullable|date_format:H:i',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('bukti');
        }

        $presence = Presence::create($validatedData);

        return redirect()->route('presensi.edit', $presence->id)->with('success', 'Thank you for taking attendance today!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presence $presence)
    {
        return view('presensi.show', [
            "title" => "Dashboard | Absensi",
            'active' => 'dashboard',
            'presence' => $presence,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        $user = Auth::user();

        $latestPresence = Presence::where('name', $user->name)->latest()->first();

        return view('presensi.edit', [
            "title" => "Dashboard | Edit Absensi",
            'active' => 'dashboard',
            'presence' => $presence,
            'absensi_in' => $latestPresence ? $latestPresence->in : '-',
            'absensi_out' => $latestPresence ? $latestPresence->out : '-',
            'users' => User::where('id', $user->id)->get(),
            'divisions' => Division::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presence $presence)
    {
        $rules = [
            'name' => 'required|max:255',
            'divisions_id' => 'required|exists:divisions,id',
            'status' => 'required',
            'date' => 'required|date',
            'in' => 'nullable|date_format:H:i',
            'out' => 'required|date_format:H:i',
        ];

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('bukti');
        }

        $presence->update($validatedData);

        return redirect()->route('presensi.index', $presence->id)->with('success', 'Data absensi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        $presence->delete();

        return redirect()->route('presensi.index')->with('success', 'Data absensi berhasil dihapus!');
    }
}
