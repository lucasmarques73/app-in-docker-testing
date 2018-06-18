<form method="POST" action="?r=post/create">
	<div class="form-group">
	<label>Title:</label>
	<input type="text" name="title" class="form-control form-control-sm">	
	</div>
	<div class="form-group">
	<label>Content:</label>
	<textarea class="form-control form-control-sm" name="content"></textarea>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" style="margin-left: 0" name="published" id="defaultCheck1">
	  <label class="form-check-label" for="defaultCheck1">
	    Published
	  </label>
	</div>
	<div class="form-group" style="margin-top: 5px;">
		<a href="?r=post" class="btn btn-sm btn-warning">Go Back</a>
		<input type="submit" class="btn btn-sm btn-success" value="Save">
	</div>
</form>