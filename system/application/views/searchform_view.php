<html>
	<head>
		<title><?=$title?></title>
	</head>
		<?=form_open("people/search")?>
			<?=form_input('username', '')?>
			<?=form_submit('btnSubmit', "Search!")?>
		</form>

</html>
