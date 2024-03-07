<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    public function event()
{
    return $this->belongsTo(events::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
    protected $fillable = [
        'user_id',
        'event_id',
    ];
}
