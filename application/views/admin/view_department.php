	
</br>
</br>
</br>
<div class="container">
	<div class="col-md-12">
	<br>
	<br>
	<h3>View Department</h3>
	<?php echo $this->session->flashdata('message'); ?>

		<table class="table table-responsive">
			<tr>
			
				<th>Delete</th>
				<th>Edit</th>
				
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Details 1</th>
				<th>Details 2</th>
				<th>Details 3</th>
				<th>Details 4</th>
				<th>Details 5</th>
				<th>Header 1</th>
				<th>Header 2</th>
				<th>Header 3</th>
				<th>Header 4</th>
				<th>Header 5</th>
				<th>Type</th>
				<th>Image</th>
				
			</tr>


			<?php foreach ($users as $user) { ?> 
			<tr>
			
				<td><a href="<?=base_url()?>admin/delete_department/<?=$user['ID']?>"><button class="btn btn-danger">Delete</button></a></td>
				<td><a href="<?=base_url()?>admin/edit_department/<?=$user['ID']?>"><button class="btn btn-primary">Edit</button></a></td>
				<td><?=$user['ID']?></td>
				<td><?=$user['Name']?></td>
				<td><?=$user['Description']?></td>
				<td><?=$user['Details1']?></td>
				<td><?=$user['Details2']?></td>
				<td><?=$user['Details3']?></td>
				<td><?=$user['Details4']?></td>
				<td><?=$user['Details5']?></td>
				<td><?=$user['Header1']?></td>
				<td><?=$user['Header2']?></td>
				<td><?=$user['Header3']?></td>
				<td><?=$user['Header4']?></td>
				<td><?=$user['Header5']?></td>
				<td><?=$user['Type']?></td>
				<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$user['Image']?>" alt="" /></td>
				</tr>


			 
			<?php } ?>


		</table>

	 
	</div>

</div>
	
	
	


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 
</body>
</html>
