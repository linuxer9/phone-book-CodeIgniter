<html>
	<head><title><?=$title?></title><head>
	<h1> Editing Person...</h1>
	<body>
		<?=form_open('people/doedit/'.$id)?>
		<table>
			<tr>
				<td><label>Name: </label></td>
				<td><?=form_input('username', $username)?></td>
			</tr>
			<tr>
				<td>
					<label>Phone: </label>
				</td>
				<td>
					<?=form_input('phone', $phone)?>
				</td>

			</tr>
			<tr>
				<td></td>
				<td><?=form_submit('btnSubmit', 'Modify')?></td>

			</tr>
		<table>
		</form>
	</body>
</html>