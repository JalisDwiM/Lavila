<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
        'user_id', 'poli', 'kuota', 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
