<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'roles_id',
        'kelas_id',
        'inventories_id'
    ];

    public function rent()
    {
        return $this->hasMany(Rent::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'roles_id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function Inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
