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
	  <th scope="col">Reason</th>
	</tr>
  </thead>
  <tbody>
  <?php if(!empty($dismisses)):?>
   <?php foreach($dismisses as $dismiss):?>
    <tr>
      <td><?=$dismiss->order_id ?></td>
      <td><?=$dismiss->employee_id ?></td>
	  <td><?=$dismiss->date ?></td>
	  <td><?=$dismiss->reason ?></td>
	  <td><a href = "<?= site_url('DismissController/view/'.$dismiss->id)?>">View</a></td>
	  <td><a href = "<?= site_url('DismissController/edit/'.$dismiss->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('DismissController/delete/'.$dismiss->id)?>">Delete</a></td>
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
<a href = "<?= site_url('dismiss/create')?>" class = "btn btn-primary">Create new dismiss</a>
</p>
</div>

<?= $this->endSection() ?>