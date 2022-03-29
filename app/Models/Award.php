<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'quantity'
    ];

    public function benefits(){
        return $this->hasMany(Benefit::class);
    }
}
