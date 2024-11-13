<?php

namespace App\Models;

use CodeIgniter\Model;

class SalespersonModel extends Model
{
    protected $table = 'salespersons';
    protected $primaryKey = 'SalespersonID';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Phone', 'HireDate', 'SalesTarget'];
}