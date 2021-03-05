<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Position;

class PositionController extends BaseController
{
	public function index()
	{
		$position = new Position();
		$data['positions'] = $position->findAll();
		$data['meta_title'] = 'Position';
		echo view('position/index', $data);
	}
	
	public function view($id)
	{
	    echo view('position/view', [
            'position' => $this->findModel($id),
			'meta_title' => 'View one Position'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('position/edit', [
            'position' => $this->findModel($id),
			'meta_title' => 'Edit Position'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$position = [
		    'id'          => $request->getPost('id'),
		    'name'    => $request->getPost('name'),
        ];
		$std = new Position();
		$std->update($position['id'], $position);
		return redirect()->to(site_url('position'));		
	}
	
	public function create()
	{
        echo view('position/create', ['meta_title' => 'Create new Position']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newPosition = [
		    'name'    => $request->getPost('name'),
        ];
		$std = new Position();
		$std->insert($newPosition);
		return redirect()->to(site_url('position'));
		
	}
	
	public function delete($id)
	{
	    $position = new Position();
		$position->delete($id);
		return redirect()->to(site_url('position'));
	}
	
	private function findModel($id)
    {
        $position = new Position();
		if (($model = $position->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
