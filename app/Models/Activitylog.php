<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitylog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'module',
        'content',
        'note',
        'agn'
    ];

    public function getUser() {
        return $this->belongsTo(User::class, 'user');
    }
}
