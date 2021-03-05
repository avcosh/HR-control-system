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
	</tr>
  </thead>
  <tbody>
      <tr>
        <th scope="row"><?=$recruit->order_id ?></th>
        <td><?=$recruit->employee_id ?></td>
	    <td><?=$recruit->date ?></td>
	  </tr>
   </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('RecruitController/edit/'.$recruit->id)?>" class = "btn btn-primary">Edit recruit</a> | 
<a href = "<?= site_url('RecruitController/delete/'.$recruit->id)?>" class = "btn btn-primary">Delete recruit</a>
</p>
</div>


<?= $this->endSection() ?>