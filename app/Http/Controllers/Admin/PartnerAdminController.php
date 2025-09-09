<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PartnerTypes;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $partners = Partner::paginate(9);
        $partnerTypes = PartnerTypes::cases();
        $totalPartners = Partner::count();
        return view('admin.partner.index', compact('partnerTypes', 'totalPartners'));
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
            'title' => 'required',
            'partner_image' => 'required',
        ]);

        $path = $request->file('partner_image')->store('partners', 'public');

        Partner::create([
            'title' => $request->title,
            'partner_image' => $path,
        ]);

        return redirect()->route('partner.index')->with('success', 'Data berhasil dibuat!');
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
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'title' => 'nullable',
            'partner_image' => 'nullable',
        ]);

        $path = $partner->partner_image;
        if ($request->hasFile('partner_image')) {
            $path = $request->file('partner_image')->store('partners', 'public');
        }

        $partner->update([
            'title' => $request->title,
            'partner_image' => $path,
        ]);

        return redirect()->route('partner.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index')->with('success', 'Data berhasil dihapus!');
    }
}
