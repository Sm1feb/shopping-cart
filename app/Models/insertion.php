<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insertion extends Model
{
    use HasFactory;
    protected $table="insert";
    public $timestamps = false;
}
