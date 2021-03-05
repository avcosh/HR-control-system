<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('PositionController/new')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "name" >
		</div>
	  </div>
	  <input type="submit" class="btn btn-primary" name = "create" value = "Create">
    </form>

<?= $this->endSection() ?>