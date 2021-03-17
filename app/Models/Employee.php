<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{
	public const STATUS_PROBATION = 1;
    public const STATUS_WORK = 2;
    public const STATUS_VACATION = 3;
    public const STATUS_DISMISS = 4;
	
	protected $DBGroup              = 'default';
	protected $table                = 'employee';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	//protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	//protected $protectFields        = true;
	protected $allowedFields        = ['first_name', 'last_name', 'address', 'email', 'status'];

	// Dates
	protected $useTimestamps        = false;
	//protected $dateFormat           = 'datetime';
	//protected $createdField         = 'created_at'; здесь название поля куда автоматически ставить дату при создании
	//protected $updatedField         = 'updated_at';  здесь название поля куда автоматически ставить дату при обновлении
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
	    //'email'        => 'required|valid_email',
		//'valid_email' => 'Проверьте корректность электронной почты'
	    
	];
	protected $validationMessages   = [
	    'errors' => [
                'required' => 'Поле должно быть заполнено'
            ]
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
	
	public function findOne($id)
    {
    
    return $this->where(['id' => $id])
                ->first();
    }

}
