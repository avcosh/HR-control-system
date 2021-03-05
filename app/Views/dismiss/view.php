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
	  <th scope="col">Date</th>
	  <th scope="col">Reason</th>
	</tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$dismiss->order_id ?></th>
      <td><?=$dismiss->employee_id ?></td>
	  <td><?=$dismiss->date ?></td>
	  <td><?=$dismiss->reason ?></td>
	</tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('DismissController/edit/'.$dismiss->id)?>" class = "btn btn-primary">Edit dismiss</a> | 
<a href = "<?= site_url('DismissController/delete/'.$dismiss->id)?>" class = "btn btn-primary">Delete dismiss</a>
</p>
</div>


<?= $this->endSection() ?>