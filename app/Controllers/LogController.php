<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Log;

class LogController extends BaseController
{
	public function index()
	{
		$log = new Log();
		$data['logs'] = $log->findAll();
		$data['meta_title'] = 'log';
		echo view('log/index', $data);
	}
	
	public function view($id)
	{
	    echo view('log/view', [
            'log' => $this->findModel($id),
			'meta_title' => 'View one log'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('log/edit', [
            'log' => $this->findModel($id),
			'meta_title' => 'Edit log'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$log = [
		    'id'            => $request->getPost('id'),
		    'created_at'    => $request->getPost('created_at'),
			'user_id'       => $request->getPost('user_id'), 
			'message'       => $request->getPost('message'),
		];
		$std = new Log();
		$std->update($log['id'], $log);
		return redirect()->to(site_url('log'));		
	}
	
	public function create()
	{
        echo view('log/create', ['meta_title' => 'Create new log']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newLog = [
		    'created_at'    => $request->getPost('created_at'),
			'user_id'       => $request->getPost('user_id'), 
			'message'       => $request->getPost('message'), 
		];
		$std = new Log();
		if($std->insert($newLog)){
			return redirect()->to(site_url('log'));
		}else{
			throw new \CodeIgniter\Exceptions\ModelException('Error');
		}
		
		
	}
	
	public function delete($id)
	{
	    $log = new Log();
		$log->delete($id);
		return redirect()->to(site_url('log'));
	}
	
	private function findModel($id)
    {
        $log = new Log();
		if (($model = $log->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
