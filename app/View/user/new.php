<form method="POST" action="?r=user/create">
	<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" class="form-control form-control-sm">	
	</div>
	<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" class="form-control form-control-sm">
	</div>
	<div class="form-group">
	<label>Pass:</label>
	<input type="password" name="pass" class="form-control form-control-sm">
	</div>
	<div class="form-group" style="margin-top: 5px;">
		<a href="?r=user" class="btn btn-sm btn-warning">Go Back</a>
		<input type="submit" class="btn btn-sm btn-success" value="Save">
	</div>
</form>