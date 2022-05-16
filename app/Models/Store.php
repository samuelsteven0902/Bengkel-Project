<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function item()
    {
        return $this->belongsToMany(Item::class,'item_store','store_id','item_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'id_mitra');
    }
}
