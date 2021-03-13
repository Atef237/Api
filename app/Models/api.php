<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class api extends Model
{


    protected $table = 'apis';

    protected $fillable = [

        'name_ar' ,'name_en', 'created_at','status' , ' updated_at'

    ];

    public function scopeSelection($query)
    {
        return $query->select('id', 'name_' . app()->getLocale() . ' as name');
    }


}
