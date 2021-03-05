<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('ContractController/new')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">First_name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "first_name" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">last_name </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "last_name" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">date_open </label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date_open" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">date_close</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date_close" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">close_reason</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "close_reason" >
		</div>
	  </div>
	  
      <input type="submit" class="btn btn-primary" name = "create" value = "Create">
    </form>

<?= $this->endSection() ?>