<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::where('users_id', auth()->user()->id)

        ->orderBy('created_at', 'desc')

        ->get();
        return view('division.index', compact('divisions'));
    }

    public function create()
    {
        return view('division.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Division::create([
            'title' => $request->title,
            'users_id' => auth()->user()->id,
        ]);

        return redirect()->route('division.index')->with('success', 'Division created successfully!');
    }

    public function edit(Division $division)
    {
        if (auth()->user()->id!= $division->users_id) {
            abort(403);
        }

        return view('division.edit', compact('division'));
    }

    public function update(Request $request, Division $division)
    {
        if (auth()->user()->id!= $division->users_id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|max:255',
        ]);

        $division->update([
            'title' => $request->title,
        ]);

        return redirect()->route('division.index')->with('success', 'Division updated successfully!');
    }

    public function destroy(Division $division)
    {
        if (auth()->user()->id!= $division->users_id) {
            abort(403);
        }

        $division->delete();
        return redirect()->route('division.index')->with('success', 'Division deleted successfully!');
    }
}
