<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
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
  <?php if(!empty($contracts)):?>
   <?php foreach($contracts as $contract):?>
    <tr>
      <td><?=$contract->employee_id ?></td>
	  <td><?=$contract->first_name ?></td>
	  <td><?=$contract->last_name ?></td>
	  <td><?=$contract->date_open ?></td>
	  <td><?=$contract->date_close ?></td>
	  <td><?=$contract->close_reason ?></td>
	  <td><a href = "<?= site_url('ContractController/view/'.$contract->id)?>">View</a></td>
	  <td><a href = "<?= site_url('ContractController/edit/'.$contract->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('ContractController/delete/'.$contract->id)?>">Delete</a></td>
    </tr>
   	<?php endforeach ?>
	<?php else :?>
	<tr>
	<td>Данных нет</td>
	</tr>
	<?php endif ?>
  </tbody>
</table>
</p>
</div>
<hr>
<div>
<p>   
<a href = "<?= site_url('contract/create')?>" class = "btn btn-primary">Create new contract</a>
</p>
</div>

<?= $this->endSection() ?>