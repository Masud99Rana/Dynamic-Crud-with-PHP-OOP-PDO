<?php include "inc/header.php"; ?>
<div class="panel panel-default">
	<div class="panel panel-default">
		<div class="panel-heading">
					<h2>Add Student <a class="btn btn-success pull-right" href="index.php">Back</a></h2>
		</div>
		<div class="panel-body">
			<form action="lib/process_student.php" method="post">
				<div class="form-group">
					<label for="name">Student Name</label>
					<input type="text" class="form-control" name="name" id="name" required="1">
				</div>
				<div class="form-group">
					<label for="name">Student Email</label>
					<input type="text" class="form-control" name="email" id="email" required="1">
				</div>
				<div class="form-group">
					<label for="name">Student Phone</label>
					<input type="text" class="form-control" name="phone" id="phone" required="1">
				</div>
				<div class="form-group">
					<input type="hidden"  name="action" value="add" >
					<input type="submit" class="btn btn-primary" name="submit" value="Add Student">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include "inc/footer.php"; ?>