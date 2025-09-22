<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AccountAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = User::where('role', 'admin_blog')->latest()->paginate(9);
        $totalAdminsBlog = User::where('role', 'admin_blog')->count();
        $totalActive = User::where('role', 'admin_blog')->where('status', Status::Active->value)->count();
        $totalNonActive = User::where('role', 'admin_blog')->where('status', Status::NonActive->value)->count();
        $newAdmins = User::where('role', 'admin_blog')->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->count();
        $status = Status::onlyActiveNonActive();
        return view('admin.accounts.index', compact('accounts', 'status', 'totalAdminsBlog', 'totalActive', 'totalNonActive', 'newAdmins'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'nullable|string|max:20',
            'status' => ['required', Rule::in(Status::onlyActiveNonActive())],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => 'admin_blog',
            'status' => $request->status,
        ]);

        return redirect()->route('account.index')->with('success', 'Akun baru berhasil ditambahkan.');
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
    public function destroy(User $account)
    {
        $account->delete();

        return redirect()->back()->with('success', 'Akun berhasil dihapus!');
    }

    public function toggleStatus(User $account)
    {
        $account->status = $account->status === 'Active' ? 'Non-Active' : 'Active';
        $account->save();

        return redirect()->back()->with('success', 'Status akun berhasil diubah!');
    }
}
