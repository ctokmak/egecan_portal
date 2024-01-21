<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FamilyForm extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        "register_date",
        "quit_date",
        "tc",
        "name",
        "dob",
        "gender",
        "address",
        "phone",
        "security",
        "status",
        "diagnoses",
        "lessons",
        "mother_id",
        "father_id"
    ];
}
