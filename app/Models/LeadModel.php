<?php

namespace App\Models;

use CodeIgniter\Model;

class LeadModel extends Model
{
    protected $table = 'leads';
    protected $primaryKey = 'LeadID';
    protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Phone', 'LeadSource', 'Status', 'AssignedSalesperson'];
}