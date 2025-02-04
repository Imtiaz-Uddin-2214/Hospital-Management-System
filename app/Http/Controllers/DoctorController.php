<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DoctorController extends Controller
{
    // Show all doctors
    public function index()
    {
        $doctors = DB::table('doctors')->get();
        return view('admin.doctor', compact('doctors'));
    }

    // Store a new doctor
    public function store(Request $request)
    {
        DB::table('doctors')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'specialization' => $request->specialization,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.doctors.store')->with('success', 'Doctor added successfully!');
    }
    
    // Update doctor details
    public function update(Request $request, $id)
    {
        DB::table('doctors')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'specialization' => $request->specialization,
            'password' => Hash::make($request->password),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.doctors.update')->with('success', 'Doctor updated successfully!');
    }

    // Delete a doctor
    public function destroy($id)
    {
        DB::table('doctors')->where('id', $id)->delete();
        return redirect()->route('admin.doctors.destroy')->with('success', 'Doctor deleted successfully!');
    }

    // Toggle doctor status
    public function toggleStatus($id)
    {
        $doctor = DB::table('doctors')->where('id', $id)->first();

        if ($doctor) {
            $newStatus = $doctor->status == 1 ? 0 : 1;

            DB::table('doctors')
                ->where('id', $id)
                ->update(['status' => $newStatus, 'updated_at' => now()]);

            return redirect()->route('admin.doctors.index')->with('success', 'Doctor status updated!');
        }

        return redirect()->route('admin.doctors.index')->with('error', 'Doctor not found!');
    }

}
