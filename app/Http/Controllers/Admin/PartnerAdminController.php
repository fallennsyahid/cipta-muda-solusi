<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PartnerTypes;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PartnerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::paginate(5);
        $partnerTypes = PartnerTypes::cases();
        $totalPartners = Partner::count();
        $partnerStatus = Status::onlyActiveNonActive();
        $totalPartnersActive = Partner::where('status', Status::Active->value)->count();
        $totalPartnersNonActive = Partner::where('status', Status::NonActive->value)->count();
        $totalPartnersType = Partner::distinct('partner_type')->count('partner_type');
        return view('admin.partner.index', compact('partners', 'partnerTypes', 'totalPartners', 'partnerStatus', 'totalPartnersActive', 'totalPartnersNonActive', 'totalPartnersType'));
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
            'name' => 'required',
            'image' => 'nullable',
            'partner_type' => 'required',
            'partner_other_type' => 'nullable',
            'partner_email' => 'required',
            'partner_phone_number' => 'required',
            'partner_links' => 'nullable',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('partners', 'public');
        }

        try {
            Partner::create($data);
            return redirect()->route('partner.index')->with('success', 'Partner berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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
            'name' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'partner_type' => 'nullable',
            'partner_other_type' => 'nullable',
            'partner_email' => 'nullable',
            'partner_phone_number' => 'nullable',
            'partner_links' => 'nullable',
            'description' => 'nullable',
            'status' => ['nullable', Rule::in(Status::onlyActiveNonActive())],
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($partner->image && Storage::disk('public')->exists($partner->image)) {
                Storage::disk('public')->delete($partner->image);
            }

            $data['image'] = $request->file('image')->store('partners', 'public');
        }

        try {
            $partner->update($data);

            return redirect()->route('partner.index')->with('success', 'Data berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error',  $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index')->with('success', 'Partner berhasil dihapus!');
    }
}
