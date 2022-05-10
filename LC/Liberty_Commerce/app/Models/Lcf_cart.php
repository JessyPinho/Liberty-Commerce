<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lcf_cart extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
