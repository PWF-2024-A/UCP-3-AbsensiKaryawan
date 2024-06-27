<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $search = request('search');
        if ($search) {
            $users = User::with('todos')-> where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->orderBy('name')
                ->where('id', '!=', '1')
                ->paginate(20)
                ->withQueryString();
        } else {
            $users = User::where('id', '!=', '1')
                ->orderBy('name')
                ->paginate(10);
        }
        return view('user.index', compact('users'));
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    // public function edit(User $user){
    //     if (auth()->user()->id == $user->user_id) {
    //         return view('karyawan.edit', compact('karyawan'));
    //     } else {
    //         return redirect()->route('karyawan.index')->with('danger', 'You are not authorized to edit this category!');
    //     }
    // }

    // public function update(Request $request, User $user){
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'address' => 'required',
    //         'phonenumber' => 'required|numeric',
    //     ]);

    //     $user->update([
    //         'name' => ucfirst($request->title),
    //         'address' => ucfirst($request->title),
    //         'phonenumber' => ucfirst($request->title),
    //     ]);
    //     return redirect()->route('karyawan.index')->with('success', 'User Data updated successfully!');
    // }

    public function edit(User $user)
    {
        if (auth()->user()->id!== $user->id) {

            return view('user.edit', compact('user'));
        }
        return redirect()->route('user.index')->with('danger', 'You are not authorized to edit this user!');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phonenumber' => 'required|numeric',
           // 'email' => 'required|email',
           // 'password' => 'nullable|confirmed',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phonenumber' => $request->input('phonenumber'),
           // 'email' => $request->input('email'),
        ]);

    //    if ($request->filled('password')) {
    //       $user->update([
    //            'password' => bcrypt($request->input('password')),
    //        ]);
    //    }

        return redirect()->route('user.index')->with('success', 'User data updated successfully!');

       // return redirect()->route('user.index')->with('danger', 'You are not authorized to edit this user!');
    }

    public function destroy(User $user)
    {
        if ($user->id != 1) {
            $user->delete();
            return back()->with('success', 'Delete user successfully!');
        } else {
            return redirect()->route('user.index')->with('danger', 'Delete user failed!');
        }
    }

}
