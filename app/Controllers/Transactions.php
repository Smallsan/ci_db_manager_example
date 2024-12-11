<?php

namespace App\Controllers;

use App\Models\TransactionModel;
use CodeIgniter\Controller;

class Transactions extends Controller
{
    public function index()
    {
        $model = new TransactionModel();
        $data['transactions'] = $model->findAll();
        
        $chartData = [];
        foreach ($data['transactions'] as $transaction) {
            $chartData[] = [
                'label' => $transaction['TransactionDate'],
                'value' => $transaction['TotalPrice']
            ];
        }
        $data['chartData'] = json_encode($chartData);

        echo view('transactions/index', $data);
    }

    public function create()
    {
        echo view('transactions/create');
    }

    public function store()
    {
        $model = new TransactionModel();
        
        $data = [
            'TransactionDate' => $this->request->getPost('TransactionDate'),
            'CustomerID' => $this->request->getPost('CustomerID'),
            'ProductID' => $this->request->getPost('ProductID'),
            'Amount' => $this->request->getPost('Amount'),
            'Quantity' => $this->request->getPost('Quantity'),
            'TotalPrice' => $this->request->getPost('TotalPrice'),
        ];
        
        $model->insert($data);
        return redirect()->to('/transactions');
    }

    public function edit($id)
    {
        $model = new TransactionModel();
        $data['transaction'] = $model->find($id);
        
        echo view('transactions/edit', $data);
    }

    public function update($id)
    {
        $model = new TransactionModel();
        
        $data = [
            'TransactionDate' => $this->request->getPost('TransactionDate'),
            'CustomerID' => $this->request->getPost('CustomerID'),
            'ProductID' => $this->request->getPost('ProductID'),
            'Amount' => $this->request->getPost('Amount'),
            'Quantity' => $this->request->getPost('Quantity'),
            'TotalPrice' => $this->request->getPost('TotalPrice'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/transactions');
    }

    public function delete($id)
    {
        $model = new TransactionModel();
        $model->delete($id);
        
        return redirect()->to('/transactions');
    }
}