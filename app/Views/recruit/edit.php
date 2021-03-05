<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('RecruitController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" value = "<?= $recruit->order_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" value = "<?= $recruit->employee_id?>" >
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