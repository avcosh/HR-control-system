<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('PositionController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name = "name" value = "<?= $position->name?>" >
		</div>
	  </div>
	  <input type = "hidden" name = "id" value = "<?= $position->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>