<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table="user";
    protected $primaryKey="user_id";
    protected $guarded=[];
    public $timestamps=false;
}
