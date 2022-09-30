<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\User\UserController;

class UserModel extends Model
{
    use HasFactory;
    public $table = 'users';
    public function logInUser($email) {

        $user = DB::select('select password from '.$this -> table.' where email = ?', [$email]);
        return $user;

    }
}
