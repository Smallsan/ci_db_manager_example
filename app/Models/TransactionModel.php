<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'TransactionID';
    protected $allowedFields = ['TransactionDate', 'CustomerID', 'ProductID', 'Amount', 'Quantity', 'TotalPrice'];
}