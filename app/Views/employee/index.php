<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
	  <th scope="col">First Name</th>
	  <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($employees as $employee):?>
    <tr>
      <td><?=$employee->last_name ?></td>
      <td><?=$employee->first_name ?></td>
	  <td><?=$employee->status ?></td>
	  <td><a href = "<?= site_url('EmployeeController/view/'.$employee->id)?>">View</a></td>
	  <td><a href = "<?= site_url('EmployeeController/edit/'.$employee->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('EmployeeController/delete/'.$employee->id)?>">Delete</a></td>
    </tr>
   	<?php endforeach ?>
  </tbody>
</table>
</p>
</div>
<hr>
<div>
<p>   
<a href = "<?= site_url('employee/create')?>" class = "btn btn-primary">Create new Employee</a>
</p>
</div>

<?= $this->endSection() ?>