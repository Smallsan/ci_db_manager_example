<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Phone', 'Address', 'DateOfRegistration', 'AssignedSalesperson'];
}