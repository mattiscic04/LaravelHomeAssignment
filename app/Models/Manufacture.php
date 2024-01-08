<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    protected $table = 'manufacturers'; 

    protected $fillable = ['name', 'address', 'phone'];
}
