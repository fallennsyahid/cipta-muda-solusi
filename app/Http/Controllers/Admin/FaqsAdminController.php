<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate(6);
        $totalFaqs = Faq::count();
        $totalPublished = Faq::where('is_published', Status::Published->value)->count();
        $totalPending = Faq::where('is_published', Status::Pending->value)->count();
        $totalBelumDijawab = Faq::where('status', Status::BelumDijawab->value)->count();
        return view('admin.faqs.index', compact('faqs', 'totalFaqs', 'totalPublished', 'totalPending', 'totalBelumDijawab'));
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
            'question_input' => 'required|string|max:150',
            'answer_input' => 'required|string',
        ]);

        Faq::create([
            'question' => $request->question_input,
            'answer' => $request->answer_input,
            'status' => $request->answer_input ? 'Sudah Dijawab' : 'Belum Dijawab',
        ]);

        return redirect()->route('faqs.index')->with('success', 'FAQ berhasil dibuat');
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
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'edit_answer_input' => 'required|string',
        ]);

        $faq->update([
            'answer' => $request->edit_answer_input,
        ]);

        return redirect()->route('faqs.index')->with('success', 'Jawaban berhasil di update');
    }

    public function answerQuestion(Request $request, Faq $faq)
    {
        $request->validate([
            'answer_input' => 'required|string|min:150|max:300',
        ]);

        $faq->answer = $request->answer_input;

        if (!empty($faq->answer)) {
            $faq->status = 'Sudah Dijawab';
        } else {
            $faq->status = 'Belum Dijawab';
        }

        $faq->save();

        return redirect()->route('faqs.index')->with('success', 'FAQ berhasil dijawab');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'Pertanyaan berhasil dihapus!');
    }

    public function updateStatus(Faq $faq)
    {
        switch ($faq->is_published) {
            case Status::Pending->value:
                $faq->update(['is_published' => Status::Published->value]);
                break;
            case Status::Published->value:
                $faq->update(['is_published' => Status::UnPublished->value]);
                break;
            case Status::UnPublished->value:
                $faq->update(['is_published' => Status::Published->value]);
                break;
        }

        return back()->with('success', 'Status FAQ berhasil diperbarui!');
    }
}
