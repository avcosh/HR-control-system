<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
	  <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?= $employee->first_name?></th>
      <td><?= $employee->last_name?></td>
      <td><?= $employee->address?></td>
      <td><?= $employee->email?></td>
	  <td><?= $employee->status?></td>
    </tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('EmployeeController/edit/'.$employee->id)?>" class = "btn btn-primary">Edit Employee</a> | 
<a href = "<?= site_url('EmployeeController/delete/'.$employee->id)?>" class = "btn btn-primary">Delete Employee</a>
</p>
</div>


<?= $this->endSection() ?>