<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'nama', 'kode',
    ];

    public function registration()
    {
    }
}
