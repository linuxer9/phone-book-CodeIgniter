<html>
	<head><title><?=$title?></title><head>
	<h1> New Person...</h1>
	<?=$this->validation->error_string?>
	<body>
		<?=form_open('people/add')?>
		<table>
			<tr>
				<td><label>Name: </label></td>
				<td><?=form_input('username', '')?></td>
			</tr>
			<tr>
				<td>
					<label>Phone: </label>
				</td>
				<td>
					<?=form_input('phone', '')?>
				</td>

			</tr>
			<tr>
				<td></td>
				<td><?=form_submit('btnSubmit', 'Add')?></td>

			</tr>
		<table>
		</form>
	</body>
</html>