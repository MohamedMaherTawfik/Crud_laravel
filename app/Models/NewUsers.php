<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewUsers extends Model
{
    protected $table='new_users';
    protected $fillable=['name','email','phoneNumber'];
}
