<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Interview;

class InterviewController extends BaseController
{
	public function index()
	{
		$interview = new Interview();
		$data['interviews'] = $interview->findAll();
		$data['meta_title'] = 'Interview';
		echo view('interview/index', $data);
	}
	
	public function view($id)
	{
	    echo view('interview/view', [
            'interview' => $this->findModel($id),
			'meta_title' => 'View one Interview'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('interview/edit', [
            'interview' => $this->findModel($id),
			'meta_title' => 'Edit Interview'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$interview = [
		    'id'          => $request->getPost('id'),
		    'date'        => $request->getPost('date'),
			'first_name'  => $request->getPost('first_name'), 
			'last_name'   => $request->getPost('last_name'),
			'email'       => $request->getPost('email'),
			'status'      => $request->getPost('status'),
			'reject_reason'  => $request->getPost('reject_reason'),
		
		];
		$std = new Interview();
		$std->update($interview['id'], $interview);
		return redirect()->to(site_url('interview'));		
	}
	
	public function create()
	{
        echo view('interview/create', ['meta_title' => 'Create new Interview']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newInterview = [
		    'date' => $request->getPost('date'),
			'first_name'     => $request->getPost('first_name'), 
			'last_name'      => $request->getPost('last_name'),
			'email'          => $request->getPost('email'),
			'status'         => $request->getPost('status'),
			'reject_reason'  => $request->getPost('reject_reason'),
			 
		];
		$std = new Interview();
		if($std->insert($newInterview)){
			return redirect()->to(site_url('interview'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $interview = new Interview();
		$interview->delete($id);
		return redirect()->to(site_url('interview'));
	}
	
	private function findModel($id)
    {
        $interview = new Interview();
		if (($model = $interview->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
