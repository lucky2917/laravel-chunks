<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students; // Import the Eloquent Model

class StudentEloquentController extends Controller
{
    // READ: Get all
    public function index() {
        $users = Students::all(); 
        return response()->json($users); 
    }
    public function show($id) {
        $user = Students::findOrFail($id); 
        return response()->json($user);
    }

    public function store(Request $request) {
        Students::create([
            'name' => 'Eloquent User',
            'email' => 'eloquent@test.com',
            'age' => 22
        ]);
        return "User added using Eloquent!";
    }
    public function update($id) {
        $user = Students::findOrFail($id);
        $user->name = "Updated Eloquent Name";
        $user->save();
        return "User updated!";
    }
    public function destroy($id) {
        Students::destroy($id);
        return "User deleted using Eloquent!";
    }
}