<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addUser() {
        DB::table('students')->insert([
            'name' => 'lmao_controller',
            'email' => 'raviii@lmao.com',
            'age' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return "User added successfully!";
    }

    public function getAllUserss() {
        $users = DB::table('students')->get();
        return response()->json($users);
    }

    public function getUser($id) {
        DB::table('students')->where('id', $id)->first();
        return "done";
    }

    public function deleteUser($id) {
        DB::table('students')->where('id', $id)->delete();
        return "user is deleted.";
    }
    public function getAllUsers() {
        $users = DB::table('students')->get();
        return view('students', ['users' => $users]);
    }

    public function showForm() {
        return view('StudentsDBform');
    }
    public function storeUser(Request $request) {
        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        return "Student " . $request->name . " added to database successfully!";
    }
    public function editForm($id) {
        $user = DB::table('students')->where('id', $id)->first();
        if (!$user) return "User barely exists!";
        
        return view('edit-student', ['user' => $user]);
    }
    public function updateUser(Request $request, $id) {
        DB::table('students')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'updated_at' => now()
        ]);
        return redirect('/ctrl-users');
    }
}