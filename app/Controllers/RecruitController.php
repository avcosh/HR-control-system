<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Recruit;

class RecruitController extends BaseController
{
	public function index()
	{
		$recruit = new Recruit();
		$data['recruits'] = $recruit->findAll();
		$data['meta_title'] = 'Recruit';
		echo view('recruit/index', $data);
	}
	
	public function view($id)
	{
	    echo view('recruit/view', [
            'recruit' => $this->findModel($id),
			'meta_title' => 'View one Recruit'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('recruit/edit', [
            'recruit' => $this->findModel($id),
			'meta_title' => 'Edit Recruit'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$recruit = [
		    'id'          => $request->getPost('id'),
		    'order_id'    => $request->getPost('order_id'),
			'employee_id' => $request->getPost('employee_id'), 
			'date'        => $request->getPost('date'),
		];
		$std = new Recruit();
		$std->update($recruit['id'], $recruit);
		return redirect()->to(site_url('recruit'));		
	}
	
	public function create()
	{
        echo view('recruit/create', ['meta_title' => 'Create new Recruit']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newRecruit = [
		    'order_id'       => $request->getPost('order_id'),
			'employee_id'    => $request->getPost('employee_id'), 
			'date'           => $request->getPost('date'), 
		];
		$std = new Recruit();
		if($std->insert($newRecruit)){
			return redirect()->to(site_url('recruit'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $recruit = new Recruit();
		$recruit->delete($id);
		return redirect()->to(site_url('recruit'));
	}
	
	private function findModel($id)
    {
        $recruit = new Recruit();
		if (($model = $recruit->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
