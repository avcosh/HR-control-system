<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;

class OrderController extends BaseController
{
	public function index()
	{
		$order = new Order();
		$data['orders'] = $order->findAll();
		$data['meta_title'] = 'order';
		echo view('order/index', $data);
	}
	
	public function view($id)
	{
	    echo view('order/view', [
            'order' => $this->findModel($id),
			'meta_title' => 'View one order'
        ]);	
	}
	
	public function edit($id)
	{
	    echo view('order/edit', [
            'order' => $this->findModel($id),
			'meta_title' => 'Edit order'
        ]);;	
	}
	
	public function update()
	{
	    $request = \Config\Services::request();
		$order = [
		    'id'          => $request->getPost('id'),
		    'date'    => $request->getPost('date'),
        ];
		$std = new Order();
		$std->update($order['id'], $order);
		return redirect()->to(site_url('order'));		
	}
	
	public function create()
	{
        echo view('order/create', ['meta_title' => 'Create new order']);	
		
	}
	
	public function new()
	{
		$request = \Config\Services::request();
		$newOrder = [
		    'date'    => $request->getPost('date'),
        ];
		$std = new Order();
		$std->insert($newOrder);
		return redirect()->to(site_url('order'));
		
	}
	
	public function delete($id)
	{
	    $order = new Order();
		$order->delete($id);
		return redirect()->to(site_url('order'));
	}
	
	private function findModel($id)
    {
        $order = new Order();
		if (($model = $order->findOne($id)) !== null) {
            return $model;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }
    }
}
