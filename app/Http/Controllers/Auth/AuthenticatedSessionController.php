<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = User::find(Auth::id());
        if ($user) {
            $user->last_login_at = now();
            $user->save();
        }

        $request->session()->regenerate();

        if (Auth::user()->role === 'admin_blog') {
            return redirect()->route('adminBlog.dashboard');
        } elseif (Auth::user()->role === 'admin') {
            return redirect()->route('dashboard.index');
        } else {
            Auth::logout();
            return redirect()->route('login')
                ->withErrors(['error' => 'You do not have access to the admin panel.']);
        }

        // return redirect()->intended(route('dashboard', absolute: false));
        // return redirect('/dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logout_success', true);
    }
}
