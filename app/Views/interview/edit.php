<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('InterviewController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date" value = "<?= $interview->date?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">first_name </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "first_name" value = "<?= $interview->first_name ?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">last_name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "last_name" value = "<?= $interview->last_name?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" name = "email" value = "<?= $interview->email?>">
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">status </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "status" value = "<?= $interview->status ?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">reject_reason</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "reject_reason" value = "<?= $interview->reject_reason?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" value = "<?= $interview->employee_id?>" >
		</div>
	  </div>
	  <input type = "hidden" name = "id" value = "<?= $interview->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>