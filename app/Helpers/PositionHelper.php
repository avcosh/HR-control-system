<?php
namespace App\Helpers;
use App\Models\Position;

class PositionHelper
{
	public static function getPositionList()
	{
		$position = new Position();
		return $position->findAll();
	}
	
	public static function getPositionName($id)
	{
	    $position = new Position();
		if (($model = $position->findOne($id)) !== null) {
            return $model->name;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }	
	}
}