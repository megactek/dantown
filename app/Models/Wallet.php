<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'balance'
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}