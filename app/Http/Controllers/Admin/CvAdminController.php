<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Exports\CvApplicantsExport;
use App\Http\Controllers\Controller;
use App\Models\CvApplicant;
use App\Models\PartnerRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CvAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cvs = CvApplicant::latest()->paginate(5);
        $applicants = CvApplicant::count();
        $applicantsPending = CvApplicant::where('status', Status::Pending->value)->count();
        $applicantsAccept = CvApplicant::where('status', Status::Diterima->value)->count();
        $applicantsDenied = CvApplicant::where('status', Status::Ditolak->value)->count();
        return view('admin.cv.index', compact('cvs', 'applicants', 'applicantsPending', 'applicantsAccept', 'applicantsDenied'));
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

    public function updateStatus(Request $request, $id)
    {
        $cvApplicants = CvApplicant::findOrFail($id);
        $cvApplicants->update(['status' => $request->status]);

        return back()->with('success', 'Status berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CvApplicant $cv)
    {
        $cv->delete();
        return redirect()->route('cv.index')->with('success', 'Data berhasil dihapus!');
    }

    public function export()
    {
        return Excel::download(new CvApplicantsExport, 'cv_applicants.xlsx');
    }
}
