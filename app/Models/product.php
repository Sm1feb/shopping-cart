<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table="addproduct";
    public $timestamps = false;
    public function cart()
    {
        return $this->hasOne(rm::class);
    }
}
