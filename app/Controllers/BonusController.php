<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bonus;

class BonusController extends BaseController
{
	public function index()
	{
		$bonus = new Bonus();
		$data['bonuses'] = $bonus->findAll();
		$data['meta_title'] = 'Bonus';
		echo view('bonus/index', $data);
	}
	
	public function view($id)
	{
	    echo view('bonus/view', [
            'bonus' => $this->findModel($id),
			'meta_title' => 'View one bonus'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('bonus/edit', [
            'bonus' => $this->findModel($id),
			'meta_title' => 'Edit bonus'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$bonus = [
		    'id'          => $request->getPost('id'),
		    'order_id'    => $request->getPost('order_id'),
            'employee_id' => $request->getPost('employee_id'),
			'cost'        => $request->getPost('cost'), 
		];
		$std = new Bonus();
		$std->update($bonus['id'], $bonus);
		return redirect()->to(site_url('bonus'));		
	}
	
	public function create()
	{
        echo view('bonus/create', ['meta_title' => 'Create new bonus']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newBonus = [
		    'order_id'    => $request->getPost('order_id'),
            'employee_id' => $request->getPost('employee_id'),
			'cost'        => $request->getPost('cost'), 
		];
		$std = new Bonus();
		$std->insert($newBonus);
		return redirect()->to(site_url('bonus'));
		
	}
	
	public function delete($id)
	{
	    $bonus = new Bonus();
		$bonus->delete($id);
		return redirect()->to(site_url('bonus'));
	}
	
	private function findModel($id)
    {
        $bonus = new Bonus();
		if (($model = $bonus->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
