<?php
use App\Helpers\EmployeeHelper;
?>

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('EmployeeController/new')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "first_name" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "last_name" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "address" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" name = "email" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
		<div class="col-sm-10">
		    <select name = "status">
		    <?php foreach(EmployeeHelper::getStatusList() as $key => $value):?>
		      <option value="<?= $key?>"><?= $value?></option>
		    <?php endforeach ?>
		    </select>
		</div>
	  </div>
      <input type="submit" class="btn btn-primary" name = "create" value = "Create">
    </form>

<?= $this->endSection() ?>