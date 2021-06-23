<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'company';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
