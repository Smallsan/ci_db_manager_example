<?php

namespace App\Controllers;

use App\Models\InteractionModel;
use CodeIgniter\Controller;

class Interactions extends Controller
{
    public function index()
    {
        $model = new InteractionModel();
        $data['interactions'] = $model->findAll();
        
        echo view('interactions/index', $data);
    }

    public function create()
    {
        echo view('interactions/create');
    }

    public function store()
    {
        $model = new InteractionModel();
        
        $data = [
            'DateOfInteraction' => $this->request->getPost('DateOfInteraction'),
            'Type' => $this->request->getPost('Type'),
            'Notes' => $this->request->getPost('Notes'),
            'CustomerID' => $this->request->getPost('CustomerID'),
            'SalespersonID' => $this->request->getPost('SalespersonID'),
        ];
        
        $model->insert($data);
        return redirect()->to('/interactions');
    }

    public function edit($id)
    {
        $model = new InteractionModel();
        $data['interaction'] = $model->find($id);
        
        echo view('interactions/edit', $data);
    }

    public function update($id)
    {
        $model = new InteractionModel();
        
        $data = [
            'DateOfInteraction' => $this->request->getPost('DateOfInteraction'),
            'Type' => $this->request->getPost('Type'),
            'Notes' => $this->request->getPost('Notes'),
            'CustomerID' => $this->request->getPost('CustomerID'),
            'SalespersonID' => $this->request->getPost('SalespersonID'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/interactions');
    }

    public function delete($id)
    {
        $model = new InteractionModel();
        $model->delete($id);
        
        return redirect()->to('/interactions');
    }
}