<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Employee_id</th>
	  <th scope="col">Position_id</th>
	  <th scope="col">Date</th>
	  <th scope="col">Rate</th>
	  <th scope="col">Salary</th>
	  <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($assignments)):?>
   <?php foreach($assignments as $assignment):?>
    <tr>
      <td><?=$assignment->order_id ?></td>
      <td><?=$assignment->employee_id ?></td>
	  <td><?=$assignment->position_id ?></td>
	  <td><?=$assignment->date ?></td>
      <td><?=$assignment->rate ?></td>
	  <td><?=$assignment->salary ?></td>
	  <td><?=$assignment->active ?></td>
	  <td><a href = "<?= site_url('AssignmentController/view/'.$assignment->id)?>">View</a></td>
	  <td><a href = "<?= site_url('AssignmentController/edit/'.$assignment->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('AssignmentController/delete/'.$assignment->id)?>">Delete</a></td>
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
<a href = "<?= site_url('assignment/create')?>" class = "btn btn-primary">Create new Assignment</a>
</p>
</div>

<?= $this->endSection() ?>