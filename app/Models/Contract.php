<?php

namespace App\Models;

use CodeIgniter\Model;

class Contract extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'contract';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	//protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	//protected $protectFields        = true;
	protected $allowedFields        = ['employee_id', 'first_name', 'last_name', 'date_open', 'date_close', 'close_reason'];

	// Dates
	protected $useTimestamps        = false;
	//protected $dateFormat           = 'datetime';
	//protected $createdField         = 'created_at';
	//protected $updatedField         = 'updated_at';
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
	    'first_name'     => 'required',
        'last_name'     => 'required',
		
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
