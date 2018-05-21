<div class="row">
<h2 class="col">List of Users</h2>
<div class="col">
	<div class="float-right">
		<a href="?r=user/new" class="btn btn-sm btn-primary">New User</a>
	</div>
</div>
</div>
<table class="table">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<?php if (isset($users)): ?>	
	<?php foreach ($users as $user): ?>
			<tr>
				<td><?=$user->getName() ?></td>
				<td><?=$user->getEmail() ?></td>
				<td>
				<div class="row">
					<div class="col">
					<a class="btn btn-sm btn-info" href="?r=user/edit/<?=$user->getId() ?>"> Edit</a>
					</div>
					<div class="col">
					<form method="POST" action="?r=user/delete">
						<input type="hidden" name="id" value="<?= $user->getId()?>">
						<input type="submit" class="btn btn-sm btn-danger" value="Delete">
					</form>
					</div>
				</div>
				</td>
			</tr>
	<?php endforeach ?>
	<?php endif ?>
</table>
<div class="d-flex justify-content-center">
	<a href="?r=home" class="btn btn-sm btn-warning">Go Back</a>
</div>