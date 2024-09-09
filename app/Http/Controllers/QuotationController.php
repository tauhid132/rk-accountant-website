<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function saveQuotation(Request $request){
        $services = '';
        foreach($request->services as $service){
            $services = $services.','.$service;
        }
        Quotation::create([
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'email_address' => $request->email_address,
            'mobile_number' => $request->mobile_number,
            'location' => $request->location,
            'approximate_turnover' => $request->approximate_turnover,
            'number_of_directors' => $request->number_of_directors,
            'number_of_employees' => $request->number_of_employees,
            'services' => $services,
            'legal_status' => $request->legal_status,
            'monthly_transections' => $request->monthly_transections,
            'record_type' => $request->record_type,
            'title' => $request->title,
        ]);
        return back()->with('success', 'Request Saved Successfully. Our Team will call you asap.');
    }
}
