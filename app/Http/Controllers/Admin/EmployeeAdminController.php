<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\CvApplicant;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(9);
        $totalEmployees = Employee::count();
        $totalActiveEmployees = Employee::where('status', 'Active')->count();
        $totalNonActiveEmployees = Employee::where('status', 'Non-Active')->count();
        $totalNewHires = Employee::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        return view('admin.employees.index', compact('employees', 'totalEmployees', 'totalActiveEmployees', 'totalNonActiveEmployees', 'totalNewHires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', 'Karyawan berhasil dihapus.');
    }

    public function toggleStatus(Employee $employee)
    {
        $employee->status = $employee->status === 'Active' ? 'Non-Active' : 'Active';
        $employee->save();

        return redirect()->back()->with('success', 'Status karyawan berhasil diubah.');
    }
}
