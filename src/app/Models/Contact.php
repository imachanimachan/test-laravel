<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    

    protected $fillable = [
        'familyname',
        'firstname',
        'store_id',
        'email',
        'tel',
        'content'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}

