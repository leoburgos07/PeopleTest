<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'address',
        'phone',
        'email',
        'awards_id'
    ];

    public function award(){
        return $this->belongsTo(Award::class);
    }
}
