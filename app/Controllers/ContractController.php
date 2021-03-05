<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Contract;

class ContractController extends BaseController
{
	public function index()
	{
		$contract = new Contract();
		$data['contracts'] = $contract->findAll();
		$data['meta_title'] = 'Contract';
		echo view('contract/index', $data);
	}
	
	public function view($id)
	{
	    echo view('contract/view', [
            'contract' => $this->findModel($id),
			'meta_title' => 'View one Contract'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('contract/edit', [
            'contract' => $this->findModel($id),
			'meta_title' => 'Edit Contract'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$contract = [
		    'id'          => $request->getPost('id'),
		    'employee_id' => $request->getPost('employee_id'),
			'first_name'        => $request->getPost('first_name'), 
			'last_name'        => $request->getPost('last_name'),
			'date_open'        => $request->getPost('date_open'),
			'date_close'        => $request->getPost('date_close'),
			'close_reason'        => $request->getPost('close_reason'),
		];
		$std = new Contract();
		$std->update($contract['id'], $contract);
		return redirect()->to(site_url('contract'));		
	}
	
	public function create()
	{
        echo view('contract/create', ['meta_title' => 'Create new Contract']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newContract = [
		    'employee_id'     => $request->getPost('employee_id'),
			'first_name'     => $request->getPost('first_name'), 
			'last_name'      => $request->getPost('last_name'),
			'date_open'       => $request->getPost('date_open'),
			'date_close'      => $request->getPost('date_close'),
			'close_reason'    => $request->getPost('close_reason'), 
		];
		$std = new Contract();
		if($std->insert($newContract)){
			return redirect()->to(site_url('contract'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $contract = new Contract();
		$contract->delete($id);
		return redirect()->to(site_url('contract'));
	}
	
	private function findModel($id)
    {
        $contract = new Contract();
		if (($model = $contract->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
