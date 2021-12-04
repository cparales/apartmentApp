<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'title', 'locality', 'country', 'address', 'type', 'rooms_nr', 'floors_nr', 'photo_url', 'contact_nr', 'description', 'price'
    ];
    protected  $table = ('houses');

    const UPDATED_AT = null;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
