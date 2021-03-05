<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('BonusController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Order_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "order_id" value = "<?= $bonus->order_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Employee_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "employee_id" value = "<?= $bonus->employee_id?>" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Cost</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "cost" value = "<?= $bonus->cost?>" >
		</div>
	  </div>
	  
	  <input type = "hidden" name = "id" value = "<?= $bonus->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>