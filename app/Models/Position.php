<?php

namespace App\Models;

use CodeIgniter\Model;

class Position extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'position';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	//protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	//protected $protectFields        = true;
	protected $allowedFields        = ['name'];

	// Dates
	protected $useTimestamps        = false;
	//protected $dateFormat           = 'datetime';
	//protected $createdField         = 'created_at';
	//protected $updatedField         = 'updated_at';
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
	    'name'     => 'required',
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
