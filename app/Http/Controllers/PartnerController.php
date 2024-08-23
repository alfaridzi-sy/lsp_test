<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partner.index');
    }

    public function getAllPartners()
    {
        $partners = Partner::all();
        return response()->json(['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'partner_name' => 'required|string|max:255',
                'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $partner = new Partner();
            $partner->partner_name = $request->partner_name;

            if ($request->hasFile('logo_url')) {
                $logoPath = $request->file('logo_url')->storeAs('public/partner_logos', $request->file('logo_url')->getClientOriginalName());
                $logoPath = str_replace('public/', '', $logoPath);
                $partner->logo_url = $logoPath;
            }

            $partner->save();

            return response()->json(['status' => 'success']);
        } catch (ValidationException $e) {
            // Log the error
            Log::error('Validation Error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Log the error
            Log::error('General Error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Terjadi kesalahan saat menambahkan partner.'], 500);
        }
    }

    public function getDataById($id)
    {
        $partner = Partner::find($id);
        if ($partner) {
            return response()->json(['status' => 'success', 'partner' => $partner]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Partner tidak ditemukan.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'partner_name' => 'required|string|max:255',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $partner = Partner::find($id);
        if (!$partner) {
            return response()->json(['status' => 'error', 'message' => 'Partner tidak ditemukan.']);
        }

        $partner->partner_name = $request->partner_name;

        if ($request->hasFile('logo_url')) {
            $logoPath = $request->file('logo_url')->storeAs('public/partner_logos', $request->file('logo_url')->getClientOriginalName());
            $logoPath = str_replace('public/', '', $logoPath);
            $partner->logo_url = $logoPath;
        }

        $partner->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        if ($partner) {
            $partner->delete();
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Partner tidak ditemukan.']);
        }
    }
}
