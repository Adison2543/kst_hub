<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "title",
        "time_limit",
        "pass_score",
        "shuffle_quest",
        "create_by",
        'showAns',
    ];

    public function getCreated() {
        return $this->belongsTo(User::class, 'create_by');
    }
}