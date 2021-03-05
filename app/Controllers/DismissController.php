<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dismiss;

class DismissController extends BaseController
{
	public function index()
	{
		$dismiss = new Dismiss();
		$data['dismisses'] = $dismiss->findAll();
		$data['meta_title'] = 'Dismiss';
		echo view('dismiss/index', $data);
	}
	
	public function view($id)
	{
	    echo view('dismiss/view', [
            'dismiss' => $this->findModel($id),
			'meta_title' => 'View one Dismiss'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('dismiss/edit', [
            'dismiss' => $this->findModel($id),
			'meta_title' => 'Edit Dismiss'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$dismiss = [
		    'id'          => $request->getPost('id'),
		    'employee_id' => $request->getPost('employee_id'),
			'order_id'    => $request->getPost('order_id'), 
			'date'        => $request->getPost('date'),
			'reason'      => $request->getPost('reason'),
		];
		$std = new Dismiss();
		$std->update($dismiss['id'], $dismiss);
		return redirect()->to(site_url('dismiss'));		
	}
	
	public function create()
	{
        echo view('dismiss/create', ['meta_title' => 'Create new Dismiss']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newDismiss = [
		    'employee_id' => $request->getPost('employee_id'),
			'order_id'    => $request->getPost('order_id'), 
			'date'        => $request->getPost('date'),
			'reason'      => $request->getPost('reason') 
		];
		$std = new Dismiss();
		if($std->insert($newDismiss)){
			return redirect()->to(site_url('dismiss'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $dismiss = new Dismiss();
		$dismiss->delete($id);
		return redirect()->to(site_url('dismiss'));
	}
	
	private function findModel($id)
    {
        $dismiss = new Dismiss();
		if (($model = $dismiss->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
