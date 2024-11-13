<?php

namespace App\Controllers;

use App\Models\LeadModel;
use CodeIgniter\Controller;

class Leads extends Controller
{
    public function index()
    {
        $model = new LeadModel();
        $data['leads'] = $model->findAll();
        
        echo view('leads/index', $data);
    }

    public function create()
    {
        echo view('leads/create');
    }

    public function store()
    {
        $model = new LeadModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'LeadSource' => $this->request->getPost('LeadSource'),
            'Status' => $this->request->getPost('Status'),
            'AssignedSalesperson' => $this->request->getPost('AssignedSalesperson'),
        ];
        
        $model->insert($data);
        return redirect()->to('/leads');
    }

    public function edit($id)
    {
        $model = new LeadModel();
        $data['lead'] = $model->find($id);
        
        echo view('leads/edit', $data);
    }

    public function update($id)
    {
        $model = new LeadModel();
        
        $data = [
            'FirstName' => $this->request->getPost('FirstName'),
            'LastName' => $this->request->getPost('LastName'),
            'Email' => $this->request->getPost('Email'),
            'Phone' => $this->request->getPost('Phone'),
            'LeadSource' => $this->request->getPost('LeadSource'),
            'Status' => $this->request->getPost('Status'),
            'AssignedSalesperson' => $this->request->getPost('AssignedSalesperson'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/leads');
    }

    public function delete($id)
    {
        $model = new LeadModel();
        $model->delete($id);
        
        return redirect()->to('/leads');
    }
}