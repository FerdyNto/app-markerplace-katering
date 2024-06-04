<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'nama_menu',
        'deskripsi',
        'foto',
        'harga',
        'user_id'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
