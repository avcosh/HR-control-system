<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
<hr>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Created At</th>
	  <th scope="col">User id</th>
	  <th scope="col">Message</th>
	</tr>
  </thead>
  <tbody>
      <tr>
        <th scope="row"><?=$log->created_at ?></th>
        <td><?=$log->user_id  ?></td>
	    <td><?=$log->message ?></td>
	  </tr>
   </tbody>
</table>
</div>
</section>
<hr>
<div>
<p>   
<a href = "<?= site_url('LogController/edit/'.$log->id)?>" class = "btn btn-primary">Edit Log</a> | 
<a href = "<?= site_url('LogController/delete/'.$log->id)?>" class = "btn btn-primary">Delete Log</a>
</p>
</div>


<?= $this->endSection() ?>