<?php

namespace App\Controllers;

use App\Models\SalespersonModel;
use CodeIgniter\Controller;

class Salespersons extends Controller
{
    public function index()
    {
        $model = new SalespersonModel();
        $data['salespersons'] = $model->findAll();
        
        echo view('salespersons/index', $data);
    }

    public function create()
    {
        echo view('salespersons/create');
    }

    public function store()
    {
        $model = new SalespersonModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'HireDate' => $this->request->getPost('HireDate'),
            'SalesTarget' => $this->request->getPost('SalesTarget'),
        ];
        
        $model->insert($data);
        return redirect()->to('/salespersons');
    }

    public function edit($id)
    {
        $model = new SalespersonModel();
        $data['salesperson'] = $model->find($id);
        
        echo view('salespersons/edit', $data);
    }

    public function update($id)
    {
        $model = new SalespersonModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'HireDate' => $this->request->getPost('HireDate'),
            'SalesTarget' => $this->request->getPost('SalesTarget'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/salespersons');
    }

    public function delete($id)
    {
        $model = new SalespersonModel();
        $model->delete($id);
        
        return redirect()->to('/salespersons');
    }
}