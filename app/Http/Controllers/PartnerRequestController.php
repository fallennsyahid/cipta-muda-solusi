<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\PartnerRequest;
use Illuminate\Http\Request;

class PartnerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'company_name' => 'required|string',
            'company_email' => 'required|string',
            'company_phone_number' => 'required',
            'company_category' => 'required|string',
            'company_link' => 'required|url',
            'file_attachments' => 'required|file|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $fillPath = null;
        if ($request->hasFile('file_attachments')) {
            $fillPath = $request->file('file_attachments')->store('partners_request', 'public');
        }

        PartnerRequest::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_phone_number' => $request->company_phone_number,
            'company_category' => $request->company_category,
            'company_link' => $request->company_link,
            'file_attachments' => $fillPath,
            'company_status' => Status::Pending->value,
        ]);

        return redirect()->route('index')->with('success', 'Permohonan Berhasil Terkirim!');
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
    public function destroy(string $id)
    {
        //
    }
}
