<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('LogController/new')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">created_at</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "created_at" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">user_id</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "user_id" >
		</div>
	  </div>
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">message </label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "message" >
		</div>
	  </div>
	 
      <input type="submit" class="btn btn-primary" name = "create" value = "Create">
    </form>

<?= $this->endSection() ?>