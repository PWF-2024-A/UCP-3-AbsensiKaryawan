<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'divisions_id', 'status', 'date', 'in', 'out', 'image', 'reason',
    ];

    // protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function division()
    {
        return $this->belongsTo(Division::class, 'divisions_id');
    }
}
