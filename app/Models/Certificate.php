<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'b_name',
        'b_gender',
        'b_mother',
        'b_father',
        'b_husband',
        'b_nid',
        'b_birth_day',
        'b_birth_no',
        'b_phone',
        'b_profession',
        'b_present_holding',
        'b_present_ward',
        'b_present_village',
        'b_present_union',
        'b_present_upazilla',
        'b_present_zilla',
        'b_permanent_holding',
        'b_permanent_ward',
        'b_permanent_village',
        'b_permanent_union',
        'b_permanent_upazilla',
        'b_permanent_zilla',
        'e_name',
        'e_gender',
        'e_mother',
        'e_father',
        'e_husband',
        'e_nid',
        'e_birth_day',
        'e_birth_no',
        'e_phone',
        'e_profession',
        'e_present_holding',
        'e_present_ward',
        'e_present_village',
        'e_present_union',
        'e_present_upazilla',
        'e_present_zilla',
        'e_permanent_holding',
        'e_permanent_ward',
        'e_permanent_village',
        'e_permanent_union',
        'e_permanent_upazilla',
        'e_permanent_zilla',
        'language',
        'medium'
    ];
}
