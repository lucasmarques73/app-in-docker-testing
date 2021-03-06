<form method="POST" action="?r=post/update">
<input type="hidden" name="id" value="<?=$post->getId() ?>">
	<div class="form-group">
	<label>Title:</label>
	<input type="text" name="title" value="<?=$post->getTitle() ?>" class="form-control form-control-sm">	
	</div>
	<div class="form-group">
	<label>CreatedAt:</label>
	<p class="form-control form-control-sm" style="background-color: #F0F0F0"><?= $post->getCreatedAt()->format('m/d/Y') ?></p>
	</div>
	<div class="form-group">
	<label>Content:</label>
	<textarea class="form-control form-control-sm" name="content"><?=$post->getContent() ?></textarea>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" style="margin-left: 0" name="published" <?= ($post->getPublished()) ? 'checked' : null; ?> id="defaultCheck1">
	  <label class="form-check-label" for="defaultCheck1">
	    Published
	  </label>
	</div>
	
	<div class="form-group" style="margin-top: 5px;">
		<a href="?r=post" class="btn btn-sm btn-warning">Go Back</a>
		<input type="submit" class="btn btn-sm btn-success" value="Save">
	</div>
</form>