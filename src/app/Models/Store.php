<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model {

    protected $fillable = ['name'];

    protected $table = 'store_';

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    
}
