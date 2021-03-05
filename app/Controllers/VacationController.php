<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Vacation;

class VacationController extends BaseController
{
	public function index()
	{
		$vacation = new Vacation();
		$data['vacations'] = $vacation->findAll();
		$data['meta_title'] = 'Vacation';
		echo view('vacation/index', $data);
	}
	
	public function view($id)
	{
	    echo view('vacation/view', [
            'vacation' => $this->findModel($id),
			'meta_title' => 'View one Vacation'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('vacation/edit', [
            'vacation' => $this->findModel($id),
			'meta_title' => 'Edit Vacation'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$vacation = [
		    'id'          => $request->getPost('id'),
		    'order_id'    => $request->getPost('order_id'),
			'employee_id' => $request->getPost('employee_id'), 
			'date_from'   => $request->getPost('date_from'),
			'date_to'     => $request->getPost('date_to'),
		];
		$std = new Vacation();
		$std->update($vacation['id'], $vacation);
		return redirect()->to(site_url('vacation'));		
	}
	
	public function create()
	{
        echo view('vacation/create', ['meta_title' => 'Create new Vacation']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newVacation = [
		    'order_id'       => $request->getPost('order_id'),
			'employee_id'    => $request->getPost('employee_id'), 
			'date_from'      => $request->getPost('date_from'),
			'date_to'        => $request->getPost('date_to'), 
		];
		$std = new Vacation();
		if($std->insert($newVacation)){
			return redirect()->to(site_url('vacation'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $vacation = new Vacation();
		$vacation->delete($id);
		return redirect()->to(site_url('vacation'));
	}
	
	private function findModel($id)
    {
        $vacation = new Vacation();
		if (($model = $vacation->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
