<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $primaryKey = 'ida';
    protected $fillable = ['ida', 'name','description','url','idt'];
}
