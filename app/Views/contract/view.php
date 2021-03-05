<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee_id</th>
	  <th scope="col">First_name </th>
	  <th scope="col">Last_name </th>
	  <th scope="col">Date_open </th>
	  <th scope="col">Date_close</th>
	  <th scope="col">Close_reason </th>
	</tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$contract->employee_id ?></th>
      <td><?=$contract->first_name ?></td>
	  <td><?=$contract->last_name ?></td>
	  <td><?=$contract->date_open ?></td>
	  <td><?=$contract->date_close ?></td>
	  <td><?=$contract->close_reason ?></td>
	</tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('ContractController/edit/'.$contract->id)?>" class = "btn btn-primary">Edit contract</a> | 
<a href = "<?= site_url('ContractController/delete/'.$contract->id)?>" class = "btn btn-primary">Delete contract</a>
</p>
</div>


<?= $this->endSection() ?>