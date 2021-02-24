<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Employee;

class EmployeeController extends BaseController
{
	public function index()
	{
		$employee = new Employee();
		$data['employees'] = $employee->findAll();
		$data['meta_title'] = 'employees';
		echo view('employee/index', $data);
	}
	
	public function view($id)
	{
	    echo view('employee/view', [
            'employee' => $this->findModel($id),
			'meta_title' => 'View one employee'
        ]);	
	}
	
	public function create()
	{
        echo view('employee/create', ['meta_title' => 'Create new employee']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newEmployee = [
		    'first_name' => $request->getPost('first_name'),
            'last_name' => $request->getPost('last_name'),
			'address' => $request->getPost('address'), 
			'email' => $request->getPost('email'), 
			'status' => $request->getPost('status')
 		];
		$std = new Employee();
		$result = $std->insert($newEmployee);
		return redirect()->to(site_url('employee'));
		
	}
	
	private function findModel($id)
    {
        $employee = new Employee();
		if (($model = $employee->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
