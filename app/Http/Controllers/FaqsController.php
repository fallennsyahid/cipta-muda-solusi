<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::where('is_published', Status::Published->value)->latest()->take(10)->get();
        return view('faqs.index', compact('faqs'));
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
            'email_input' => 'nullable|string|email',
            'question_input' => 'required|string|max:150',
        ]);

        Faq::create([
            'email' => $request->email_input,
            'question' => $request->question_input,
            'answer' => '-',
            'status' => 'Belum Dijawab',
        ]);

        return redirect()->route('user.faqs.index')->with('success', 'Pertanyaan berhasil terkirim');
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
