<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rm extends Model
{
    use HasFactory;
    protected $table="cartadd";
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function buisness()
    {
        return $this->belongsTo(buisness::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
