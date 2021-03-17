<?php
namespace App\Helpers;
use App\Models\Employee;

class EmployeeHelper
{
    public static function getStatusList()
	
    {
        return [
            Employee::STATUS_PROBATION => 'Probation',
            Employee::STATUS_WORK => 'Work',
            Employee::STATUS_VACATION => 'Vacation',
            Employee::STATUS_DISMISS => 'Dismiss',
        ];
    }

    public static function getStatusName($status)
    {
         return self::getStatusList()[$status];
	}
	
	public static function getEmployeeList()
	{
		$employee = new Employee();
		return $employee->findAll();
	}
	
	public static function getEmployeeName($id)
	{
	    $employee = new Employee();
		if (($model = $employee->findOne($id)) !== null) {
            return $model->last_name;
        } else {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find');
        }	
	}
	
	
} 




