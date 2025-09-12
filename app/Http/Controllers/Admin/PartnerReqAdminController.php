<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use Illuminate\Http\Request;
use App\Models\PartnerRequest;
use App\Http\Controllers\Controller;

class PartnerReqAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerReq = PartnerRequest::latest()->paginate(5);
        $totalRequest = PartnerRequest::count();
        $totalAccepts = PartnerRequest::where('company_status', Status::Diterima->value)->count();
        $totalDenieds = PartnerRequest::where('company_status', Status::Ditolak->value)->count();
        $totalPendings = PartnerRequest::where('company_status', Status::Pending->value)->count();
        return view('admin.partnerReq.index', compact('partnerReq', 'totalRequest', 'totalAccepts', 'totalDenieds', 'totalPendings'));
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
        $partnerRequest = PartnerRequest::findOrFail($id);
        $partnerRequest->update(['company_status' => $request->company_status]);

        return back()->with('success', 'Status berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
