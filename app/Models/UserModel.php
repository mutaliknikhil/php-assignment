<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "email";
    
    protected $allowedFields =[
        'email',
        'name',
        'password',
        'profile_image'
    ];

}

?>