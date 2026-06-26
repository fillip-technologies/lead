<?php

namespace App\Http\Controllers;

use App\Models\LeadIndustry;
use App\Models\LeadRating;
use App\Models\LeadSource;
use App\Models\LeadAddress;
use Illuminate\Http\Request;

class LeadFormController extends Controller
{
    private function toTab(string $tab)
    {
        return redirect()->route('home')
            ->with('activeTab', $tab)
            ->with('leadFormOpen', true);
    }

    private function validate(Request $request, string $table, ?int $ignoreId = null): void
    {
        $unique = "unique:{$table},name" . ($ignoreId ? ",{$ignoreId}" : '');

        $request->validate([
            'name'  => ['required', 'string', 'max:255', $unique],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);
    }

    // ─── Industry ────────────────────────────────────────────────────────────

    public function storeIndustry(Request $request)
    {
        $this->validate($request, 'lead_industries');
        LeadIndustry::create($request->only('name', 'notes'));

        return $this->toTab('leadindustry')->with('success', 'Industry added successfully.');
    }

    public function updateIndustry(Request $request, int $id)
    {
        $item = LeadIndustry::findOrFail($id);
        $this->validate($request, 'lead_industries', $id);
        $item->update($request->only('name', 'notes'));

        return $this->toTab('leadindustry')->with('success', 'Industry updated successfully.');
    }

    public function destroyIndustry(int $id)
    {
        LeadIndustry::findOrFail($id)->delete();

        return $this->toTab('leadindustry')->with('success', 'Industry deleted.');
    }

    // ─── Rating ──────────────────────────────────────────────────────────────

    public function storeRating(Request $request)
    {
        $this->validate($request, 'lead_ratings');
        LeadRating::create($request->only('name', 'notes'));

        return $this->toTab('leadrating')->with('success', 'Rating added successfully.');
    }

    public function updateRating(Request $request, int $id)
    {
        $item = LeadRating::findOrFail($id);
        $this->validate($request, 'lead_ratings', $id);
        $item->update($request->only('name', 'notes'));

        return $this->toTab('leadrating')->with('success', 'Rating updated successfully.');
    }

    public function destroyRating(int $id)
    {
        LeadRating::findOrFail($id)->delete();

        return $this->toTab('leadrating')->with('success', 'Rating deleted.');
    }

    // ─── Source ──────────────────────────────────────────────────────────────

    public function storeSource(Request $request)
    {
        $this->validate($request, 'lead_sources');
        LeadSource::create($request->only('name', 'notes'));

        return $this->toTab('leadsource')->with('success', 'Source added successfully.');
    }

    public function updateSource(Request $request, int $id)
    {
        $item = LeadSource::findOrFail($id);
        $this->validate($request, 'lead_sources', $id);
        $item->update($request->only('name', 'notes'));

        return $this->toTab('leadsource')->with('success', 'Source updated successfully.');
    }

    public function destroySource(int $id)
    {
        LeadSource::findOrFail($id)->delete();

        return $this->toTab('leadsource')->with('success', 'Source deleted.');
    }

    // ─── Address ─────────────────────────────────────────────────────────────

    public function storeAddress(Request $request)
    {
        $this->validate($request, 'lead_addresses');
        LeadAddress::create($request->only('name', 'notes'));

        return $this->toTab('leadaddress')->with('success', 'Address added successfully.');
    }

    public function updateAddress(Request $request, int $id)
    {
        $item = LeadAddress::findOrFail($id);
        $this->validate($request, 'lead_addresses', $id);
        $item->update($request->only('name', 'notes'));

        return $this->toTab('leadaddress')->with('success', 'Address updated successfully.');
    }

    public function destroyAddress(int $id)
    {
        LeadAddress::findOrFail($id)->delete();

        return $this->toTab('leadaddress')->with('success', 'Address deleted.');
    }
}
