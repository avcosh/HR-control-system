<?php
use App\Helpers\EmployeeHelper;
?>

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('RecruitController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" value = "<?= $recruit->order_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>
		<div class="col-sm-10">
		 
		  <select name = "employee_id">
		      <?php foreach(EmployeeHelper::getEmployeeList() as $employee):?>
			    <option value="<?=$employee->id;?>" <?php if($employee->id == $recruit->employee_id)echo "selected"?> ><?=$employee->last_name?></option>
		      <?php endforeach ?>
		    </select>
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date" value = "<?= $recruit->date?>" >
		</div>
	  </div>
	  
	  <input type = "hidden" name = "id" value = "<?= $recruit->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>