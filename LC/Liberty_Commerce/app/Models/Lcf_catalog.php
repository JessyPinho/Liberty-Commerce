<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lcf_catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_jeu',
        'image',
        'description', 
        'prix', 
        'genre', 
        'stock', 
    ];
    public function User()
    {
        return $this->hasMany(User::class);
    }
    

}
