<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterStudent extends Model
{
    protected $table = 'register_students';

    protected $fillable = [
        'responsible_id',
        'name',
        'birth_certificate',
        'meta'
    ];

    protected $casts = [
        'meta' => 'array'
    ];

    public function responsible()
    {
        return $this->belongsTo(RegisterResponsible::class, 'responsible_id', 'id');
    }
}
