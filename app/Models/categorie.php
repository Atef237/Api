<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name' , 'created_at' , ' updated_at'
    ];
}
