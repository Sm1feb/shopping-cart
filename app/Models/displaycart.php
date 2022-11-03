<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class displaycart extends Model
{
    use HasFactory;
    protected $table="addtocart";
    public $timestamps = false;
}
