<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = 'books';

    public function autor()
    {
        return $this->hasOne('App\Admin', 'id', 'id_admin');
    }
}
