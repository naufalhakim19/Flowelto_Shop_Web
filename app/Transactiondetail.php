<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactiondetail extends Model
{
    public function flower()
    {
        return $this->hasOne('App\Flower', 'id' , 'flowerID');
    }
}
