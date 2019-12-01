<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    protected $table = 'fotografia';
    protected $primarykey = 'id';
    protected $fillable = array('link');

    public $timestamps = true;

    public function propriedadeID()
    {
        return $this->belongsTo('App\Fotografia');
    }

    public function propriedades()
    {
        return $this->belongsTo('App\Propriedade');
    }

}
