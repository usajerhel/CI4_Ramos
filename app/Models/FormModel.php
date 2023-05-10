<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email',
        'name',
        'comment'
    ];
}


?>
