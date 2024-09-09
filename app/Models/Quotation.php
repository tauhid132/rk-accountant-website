<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'company_name',
        'email_address',
        'mobile_number',
        'location',
        'approximate_turnover',
        'number_of_directors',
        'number_of_employees',
        'services',
        'legal_status',
        'monthly_transections',
        'record_type',
        'title',
    ];
}
