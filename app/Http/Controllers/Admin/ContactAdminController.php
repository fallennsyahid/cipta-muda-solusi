<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ContactStatus;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Jobs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        $belumDibalas = ContactStatus::BelumDibalas;
        $pesanBaru =  Contact::whereDate('created_at', Carbon::today())->count();
        $totalBelumDibalas = Contact::where('status', ContactStatus::BelumDibalas->value)->count();
        $totalSudahDibalas = Contact::where('status', ContactStatus::SudahDibalas->value)->count();
        return view('admin.contact.index', compact('contacts', 'pesanBaru', 'totalBelumDibalas', 'totalSudahDibalas', 'belumDibalas'));
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
    public function update(Contact $contact)
    {
        $contact->status = ContactStatus::SudahDibalas;
        $contact->save();

        return redirect()->back()->with('success', 'Status berhasild diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success', 'Contact berhasil dihapus!');
    }
}
