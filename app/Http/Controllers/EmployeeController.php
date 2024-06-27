<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function web_employee_index()
    {
        return view("dashboard", [
            "employees" => Employee::all(),
        ]);
    }

    public function web_employee_add()
    {
        return view("add");
    }

    public function web_employee_store(Request $request)
    {
        $request->validate([
            "avatar" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048", // Validasi untuk file gambar
            "name" => "required|string|max:255",
            "age" => "required|integer",
        ]);

        // Mengambil file avatar dari request
        if ($request->hasFile('avatar')) {
            $avatar_path = $request->file('avatar')->store('public/user-avatar');

            // Simpan nama file avatar ke dalam database
            Employee::create([
                "avatar" => $avatar_path, // Simpan nama file avatar
                "name" => $request->name,
                "age" => $request->age,
            ]);
        } else {
            // Jika tidak ada file avatar diupload
            Employee::create([
                "name" => $request->name,
                "age" => $request->age,
            ]);
        }

        return redirect()->route('dashboard')->with('status', 'Employee added successfully.');
    }
}
