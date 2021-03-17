<?php
use App\Helpers\EmployeeHelper;
use App\Helpers\PositionHelper;
?>

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('AssignmentController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" value = "<?= $assignment->order_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>
		<div class="col-sm-10">
		  
		  <select name = "employee_id">
		      <?php foreach(EmployeeHelper::getEmployeeList() as $employee):?>
			    <option value="<?=$employee->id;?>" <?php if($employee->id == $assignment->employee_id)echo "selected"?> ><?=$employee->last_name?></option>
		      <?php endforeach ?>
		    </select>
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Position</label>
		<div class="col-sm-10">
		
		    <select name = "position_id">
		      <?php foreach(PositionHelper::getPositionList() as $position):?>
			    <option value="<?=$position->id;?>" <?php if($position->id == $assignment->position_id)echo "selected"?>><?=$position->name?></option>
		      <?php endforeach ?>
		    </select>
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date" value = "<?= $assignment->date?>">
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Rate</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "rate" value = "<?= $assignment->rate?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Salary</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "salary" value = "<?= $assignment->salary?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Active</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "active" value = "<?= $assignment->active?>" >
		</div>
	  </div>
	  <input type = "hidden" name = "id" value = "<?= $assignment->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>