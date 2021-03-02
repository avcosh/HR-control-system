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
	  <th scope="col">Position_id</th>
	  <th scope="col">Date</th>
	  <th scope="col">Rate</th>
	  <th scope="col">Salary</th>
	  <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row"><?=$assignment->order_id ?></th>
      <td><?=$assignment->employee_id ?></td>
	  <td><?=$assignment->position_id ?></td>
	  <td><?=$assignment->date ?></td>
      <td><?=$assignment->rate ?></td>
	  <td><?=$assignment->salary ?></td>
	  <td><?=$assignment->active ?></td>
    </tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('AssignmentController/edit/'.$assignment->id)?>" class = "btn btn-primary">Edit Assignment</a> | 
<a href = "<?= site_url('AssignmentController/delete/'.$assignment->id)?>" class = "btn btn-primary">Delete Assignment</a>
</p>
</div>


<?= $this->endSection() ?>