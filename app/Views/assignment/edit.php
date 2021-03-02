<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('AssignmentController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" value = "<?= $assignment->order_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" value = "<?= $assignment->employee_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Position_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "position_id" value = "<?= $assignment->position_id?>" >
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