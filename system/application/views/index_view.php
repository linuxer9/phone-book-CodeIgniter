<html>




<table class="users" border=0>
<th>Name</th><th>Phone</th>

<?php foreach($usersquery->result() as $rec):?>
	<tr>
		<td><?=$rec->username?></td><td><?=$rec->phone?></td><td> <?=anchor('people/show/'.$rec->id, 'Show')?>|<?=anchor('people/edit/'.$rec->id, 'Edit')?>|<?=anchor('people/delete/'.$rec->id, '[X]')?></td>
	</tr>


<?php endforeach;?>


</table>

<br />
<?=anchor('people/create/', 'New Person')?>|<?=anchor('people/searchform','Search')?>
</html>
