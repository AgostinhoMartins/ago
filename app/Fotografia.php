<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    protected $table = 'fotografia';
    protected $primarykey = 'id';
    protected $fillable = array('link','created_at', 'updated_at');

    public $timestamps = true;

    public function propriedadeID()
    {
        echo $fillable;
        return $this->belongsTo('App\Fotografia');
    }
}
