<?php

namespace App\Models;

use CodeIgniter\Model;

class InteractionModel extends Model
{
    protected $table = 'interactions';
    protected $primaryKey = 'InteractionID';
    protected $allowedFields = ['DateOfInteraction', 'Type', 'Notes', 'CustomerID', 'SalespersonID'];
}