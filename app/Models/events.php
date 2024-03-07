<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

        public function user()
    {
        return $this->belongsTo(User::class);
    }
//     public function reservations()
// {
//     return $this->hasMany(Reservation::class);
// }
public function reservations()
{
    return $this->hasMany(reservation::class, 'event_id');
}

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'category_id',
        'user_id',
        'places_available',
        'states',

    ];
    
}
