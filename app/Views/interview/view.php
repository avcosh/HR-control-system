<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
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
  
    <tr>
      <th scope="row"><?=$interview->date ?></th>
      <td><?=$interview->first_name ?></td>
	  <td><?=$interview->last_name ?></td>
	  <td><?=$interview->email  ?></td>
      <td><?=$interview->status ?></td>
	  <td><?=$interview->reject_reason ?></td>

    </tr>
   
  </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('InterviewController/edit/'.$interview->id)?>" class = "btn btn-primary">Edit interview</a> | 
<a href = "<?= site_url('InterviewController/delete/'.$interview->id)?>" class = "btn btn-primary">Delete interview</a>
</p>
</div>


<?= $this->endSection() ?>