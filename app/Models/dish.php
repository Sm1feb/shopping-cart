<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;
    protected $table="buy";
    public $timestamps = false;
}
