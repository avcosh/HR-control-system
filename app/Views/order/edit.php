<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <form action = "<?= site_url('OrderController/update')?>" method = "post">
	  <div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
		<div class="col-sm-10">
		  <input type="date" class="form-control" name = "date" value = "<?= $order->date?>" >
		</div>
	  </div>
	  <input type = "hidden" name = "id" value = "<?= $order->id?>">
      <input type="submit" class="btn btn-primary" name = "edit" value = "Edit">
    </form>

<?= $this->endSection() ?>