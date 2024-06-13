<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'first_name',
        'addresse',
        'age',
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
