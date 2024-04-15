<?php 
 
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

// class admins extends Authenticatable
// {
//     use HasFactory,Notifiable;
//     protected $table = ['username','email','password'];
// }

class admins extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'admins'; //change this variable type
    protected $fillable = ['name','email','password'];
    // protected $hidden = ['password', 'rem];

}