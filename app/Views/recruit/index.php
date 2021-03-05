<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
	  <th scope="col">Employee_id</th>
	  <th scope="col">Date</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($recruits)):?>
   <?php foreach($recruits as $recruit):?>
    <tr>
      <td><?=$recruit->order_id ?></td>
      <td><?=$recruit->employee_id ?></td>
	  <td><?=$recruit->date ?></td>
	  <td><a href = "<?= site_url('RecruitController/view/'.$recruit->id)?>">View</a></td>
	  <td><a href = "<?= site_url('RecruitController/edit/'.$recruit->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('RecruitController/delete/'.$recruit->id)?>">Delete</a></td>
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
<a href = "<?= site_url('recruit/create')?>" class = "btn btn-primary">Create new Recruit</a>
</p>
</div>

<?= $this->endSection() ?>