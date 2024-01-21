<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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

    public function father()
    {
        return $this->hasOne(Fathers::class);
    }

    public function mother()
    {
        return $this->hasOne(Mothers::class);
    }

    public function abllsr()
    {
        return $this->hasMany(Form::class);
    }
}
