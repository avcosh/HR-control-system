<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div>
<p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
	  <th scope="col">First name</th>
	  <th scope="col">Last name</th>
	  <th scope="col">Email</th>
	  <th scope="col">Status</th>
	  <th scope="col">Reject reason</th>
	 
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($interviews)):?>
   <?php foreach($interviews as $interview):?>
    <tr>
      <td><?=$interview->date ?></td>
      <td><?=$interview->first_name ?></td>
	  <td><?=$interview->last_name ?></td>
	  <td><?=$interview->email  ?></td>
      <td><?=$interview->status ?></td>
	  <td><?=$interview->reject_reason ?></td>
	 
	  <td><a href = "<?= site_url('InterviewController/view/'.$interview->id)?>">View</a></td>
	  <td><a href = "<?= site_url('InterviewController/edit/'.$interview->id)?>">Edit</a></td>
	  <td><a href = "<?= site_url('InterviewController/delete/'.$interview->id)?>">Delete</a></td>
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
<a href = "<?= site_url('interview/create')?>" class = "btn btn-primary">Create new interview</a>
</p>
</div>

<?= $this->endSection() ?>