<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Assignment;

class AssignmentController extends BaseController
{
	public function index()
	{
		$assignment = new Assignment();
		$data['assignments'] = $assignment->findAll();
		$data['meta_title'] = 'assignment';
		echo view('assignment/index', $data);
	}
	
	public function view($id)
	{
	    echo view('assignment/view', [
            'assignment' => $this->findModel($id),
			'meta_title' => 'View one Assignment'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('assignment/edit', [
            'assignment' => $this->findModel($id),
			'meta_title' => 'Edit assignment'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$assignment = [
		    'id'         => $request->getPost('id'),
		    'order_id' => $request->getPost('order_id'),
            'employee_id' => $request->getPost('employee_id'),
			'position_id' => $request->getPost('position_id'), 
			'date' => $request->getPost('date'), 
			'rate' => $request->getPost('rate'),
			'salary' => $request->getPost('salary'), 
			'active' => $request->getPost('active'),
 		];
		$std = new Assignment();
		$std->update($assignment['id'], $assignment);
		return redirect()->to(site_url('assignment'));		
	}
	
	public function create()
	{
        echo view('assignment/create', ['meta_title' => 'Create new assignment']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newAssignment = [
		    'order_id' => $request->getPost('order_id'),
            'employee_id' => $request->getPost('employee_id'),
			'position_id' => $request->getPost('position_id'), 
			'date' => $request->getPost('date'), 
			'rate' => $request->getPost('rate'),
			'salary' => $request->getPost('salary'), 
			'active' => $request->getPost('active'),
 		];
		$std = new Assignment();
		$result = $std->insert($newAssignment);
		return redirect()->to(site_url('assignment'));
		
	}
	
	public function delete($id)
	{
	    $assignment = new Assignment();
		$assignment->delete($id);
		return redirect()->to(site_url('assignment'));
	}
	
	private function findModel($id)
    {
        $assignment = new Assignment();
		if (($model = $assignment->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
