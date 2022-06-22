<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'total',
        'namapeminjam',
        'kelas_id',
        'inventories_id',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventories_id');
    }
}
