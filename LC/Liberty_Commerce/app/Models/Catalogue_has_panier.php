<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue_has_panier extends Model
{
    use HasFactory;
    public function Catalog()
    {
        return $this->hasMany(Catalog::class);
    }
    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }
}
