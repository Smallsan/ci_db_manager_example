<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Controller;

class Customers extends Controller
{
    public function index()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        
        echo view('customers/index', $data);
    }

    public function create()
    {
        echo view('customers/create');
    }

    public function store()
    {
        $model = new CustomerModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'Address' => $this->request->getPost('Address'),
            'DateOfRegistration' => $this->request->getPost('DateOfRegistration'),
            'AssignedSalesperson' => $this->request->getPost('AssignedSalesperson'),
        ];
        
        $model->insert($data);
        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        
        echo view('customers/edit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'Address' => $this->request->getPost('Address'),
            'DateOfRegistration' => $this->request->getPost('DateOfRegistration'),
            'AssignedSalesperson' => $this->request->getPost('AssignedSalesperson'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/customers');
    }

    public function delete($id)
    {
        $model = new CustomerModel();
        $model->delete($id);
        
        return redirect()->to('/customers');
    }
}