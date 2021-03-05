<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Employee_id</th>
	  <th scope="col">Date From</th>
	  <th scope="col">Date To</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($vacations)):?>
   <?php foreach($vacations as $vacation):?>
    <tr>
      <td><?=$vacation->order_id ?></td>
      <td><?=$vacation->employee_id ?></td>
	  <td><?=$vacation->date_from ?></td>
	  <td><?=$vacation->date_to ?></td>
	  <td><a href = "<?= site_url('VacationController/view/'.$vacation->id)?>">View</a></td>
	  <td><a href = "<?= site_url('VacationController/edit/'.$vacation->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('VacationController/delete/'.$vacation->id)?>">Delete</a></td>
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
<a href = "<?= site_url('vacation/create')?>" class = "btn btn-primary">Create new vacation</a>
</p>
</div>

<?= $this->endSection() ?>