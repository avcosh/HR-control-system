<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('VacationController/new')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date From</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date_from" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date To</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date_to" >
		</div>
	  </div>
      <input type="submit" class="btn btn-primary" name = "create" value = "Create">
    </form>

<?= $this->endSection() ?>