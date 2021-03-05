<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Employee_id</th>
	  <th scope="col">Cost</th>
	</tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$bonus->order_id ?></th>
      <td><?=$bonus->employee_id ?></td>
	  <td><?=$bonus->cost ?></td>
	</tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('BonusController/edit/'.$bonus->id)?>" class = "btn btn-primary">Edit bonus</a> | 
<a href = "<?= site_url('BonusController/delete/'.$bonus->id)?>" class = "btn btn-primary">Delete bonus</a>
</p>
</div>


<?= $this->endSection() ?>