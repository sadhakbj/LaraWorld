<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed  first_name
 * @property mixed  email
 * @property string password
 */
class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

}
