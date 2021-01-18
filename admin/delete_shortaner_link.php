<form method="POST">
	<div class="form-group">
		<div style="text-align:center">Are You Sure You Want To Delete This <b>shortaner Link</b></div>
	</div>
	<div class="modal-footer">
		<a href=delete_inner_shortaner_link.php?dataid=<?php echo $_POST['dataid'] ?>><button type="button" class="btn btn-primary">Yes (Delete) </button></a>
		<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
	</div>
</form>