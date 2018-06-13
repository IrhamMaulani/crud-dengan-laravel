<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'id_user';
    protected $table = 'penggunas';
}
