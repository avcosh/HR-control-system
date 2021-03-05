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
	  <th scope="col">Date From</th>
	  <th scope="col">Date To</th>
	</tr>
  </thead>
  <tbody>
      <tr>
        <th scope="row"><?=$vacation->order_id ?></th>
        <td><?=$vacation->employee_id ?></td>
	    <td><?=$vacation->date_from ?></td>
		   <td><?=$vacation->date_to ?></td>
	  </tr>
   </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('VacationController/edit/'.$vacation->id)?>" class = "btn btn-primary">Edit vacation</a> | 
<a href = "<?= site_url('VacationController/delete/'.$vacation->id)?>" class = "btn btn-primary">Delete vacation</a>
</p>
</div>


<?= $this->endSection() ?>