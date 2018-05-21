<div class="row">
<h2 class="col">List of Posts</h2>
<div class="col">
	<div class="float-right">
		<a href="?r=post/new" class="btn btn-sm btn-primary">New Post</a>
	</div>
</div>
</div>
<table class="table">
	<tr>
		<th>Title</th>
		<th>Created_at</th>
		<th>Published</th>
		<th>Actions</th>
	</tr>
	<?php if (isset($posts)): ?>	
	<?php foreach ($posts as $post): ?>
			<tr>
				<td><?=$post->getTitle() ?></td>
				<td><?=$post->getCreated_at() ?></td>
				<td><?=$post->getPublished() ? 'Published' : 'Not Published'  ?></td>
				<td>
				<div class="row">
					<div class="col">
					<a class="btn btn-sm btn-info" href="?r=post/edit/<?=$post->getId() ?>"> Edit</a>
					</div>
					<div class="col">
					<form method="POST" action="?r=post/delete">
						<input type="hidden" name="id" value="<?= $post->getId()?>">
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