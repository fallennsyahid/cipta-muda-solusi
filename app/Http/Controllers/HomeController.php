<?php

namespace App\Http\Controllers;

use App\Enums\PartnerTypes;
use App\Enums\Status;
use App\Models\CategoryPartner;
use App\Models\Partner;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $partners = Partner::all();
        $partnerTypes = CategoryPartner::active()->get();
        $portfolios = Portfolio::where('status', Status::Published->value)->latest()->take(2)->get();
        $allPortfolios = Portfolio::where('status', Status::Published->value)->latest()->get();
        $partners = Partner::where('status', Status::Active->value)->get();
        return view('welcome', compact('partnerTypes', 'partners', 'portfolios', 'allPortfolios'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
