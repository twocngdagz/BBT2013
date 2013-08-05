<div class="">
	<legend>Manage Users</legend>
	<table class="flexUsers"></table>
	<div class="clear"><br/></div>
    <a href="#modal-create-user" role="button" class="btn btn-success" data-toggle="modal">Create New User</a>
</div>
<div class="modal hide fade" id="modal-create-user">
	<form action="./users" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Users</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span6">
				  	<div><small>Username</small></div>
					<input type="text" id="username" class="input-smalll" name="d[username]" required placeholder="">
					
					<div><small>Email</small></div>
					<input type="email" name="d[email]" required placeholder="" id="email">
					
					<div><small>Name</small></div>
					
					<input type="text" class="input-smalll" name="d[first_name]" required placeholder="First" id="firstname">
					<input type="text" class="input-smalll" name="d[last_name]" required placeholder="Last" id="lastname">
					
		  		</div>
		  		<div class="span6">
		  			<div><small>Password</small></div>
					<input type="password" name="d[password]" required placeholder="" id="password">
					
					<div><small>Re-type Password</small></div>
					<input type="password" name="d[password2]" required placeholder="" id="password2">
					
					<div><small>Role</small></div>	
					<select name="d[role]" id="role">
						<option value=""></option>
						<?php
						$roles = array( "1" => "Admins",
										"2" => "Manager",
										"3" => "Customer Support Level 2",
										"4" => "Customer Support",
										"5" => "User");
						?>
						<?php foreach ($roles as $key => $role): ?>
							<option value="<?php echo $key ?>" ><?php echo $role ?></option>
						<?php endforeach; ?>
					</select>
		  		</div>
		  	</div>
		  </div>
		  <div class="modal-footer">
		    <input type="hidden" name="d[user_id]" value="" id="user-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
		  </div>
	</form>
</div>


<script type="text/javascript">
$(document).ready(function() {	
	$(".flexUsers").flexigrid({
		url : './core/view/grid/users.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
					{ display : 'Username', name : 'username', width : 80, sortable : true, align : 'left'}, 
					{ display : 'First', name : 'first_name', width : 90, sortable : true, align : 'left'}, 
					{ display : 'Last', name : 'last_name', width : 90, sortable : true, align : 'left'}, 
					{ display : 'Email', name : 'email', width : 180, sortable : true, align : 'left'}, 
					{ display : 'Password', name : 'password', width : 180, sortable : true, align : 'left'},  
					{ display : 'Role', name : 'role', width : 170, sortable : true, align : 'left'}
					],
		searchitems : [ {
			display : 'Id',
			name : 'id'
		}, {
			display : 'Email',
			name : 'email',
			isdefault : true
		}, {
			display : 'Firstname',
			name : 'first_name'
		}, {
			display : 'Lastname',
			name : 'last_name'
		} , {
			display : 'Username',
			name : 'username'
		} ],
		onDoubleClick: false,
		multiSel: false,
		sortname : "id",
		sortorder : "desc",
		usepager : true,
		title : '',
		useRp : true,
		resize: false,
		rp : 10,
		showTableToggleBtn : true,
		width : 700,
		singleSelect: true,
		height : 270
	});
	
	$('.flexUsers').click(function(event){
	    $('.trSelected', this).each( function(data){	
			$.ajax({
				type:'POST',
				url:"core/view/grid/users.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
					$.each(data.rows, function (index, value) {	
						$("#role").val(value.cell.permission);   	
					});
				},
				dataType:'json'
			});	    
			
	        $('#user-id').attr('value', $(this).attr('id').substr(3));
	        $('#username').attr('value',  $('td[abbr="username"] >div', this).text());
	        $('#firstname').attr('value',  $('td[abbr="first_name"] >div', this).text());
	        $('#lastname').attr('value',  $('td[abbr="last_name"] >div', this).text());
	        $('#email').attr('value',  $('td[abbr="email"] >div', this).text());
	        $('#password').attr('value',  $('td[abbr="password"] >div', this).text());
	        $('#password2').attr('value',  $('td[abbr="password"] >div', this).text());
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	    	$('#delete').show();
	    	
	        $('#modal-create-user').modal('show');
	        $(".flexUsers").flexReload();	        
	    });
	    

	});
	
	$('#modal-create-user').on('hidden', function () {
	    $('#submitter').attr('value', 'Create');		
	    $('#user-id').attr('value', '');
	    $('#action').attr('value', 'create');
	    $('#delete').hide();
	    
        $('#username').attr('value', '');
        $('#firstname').attr('value', '');
        $('#lastname').attr('value', '');
        $('#email').attr('value', '');
        $('#password').attr('value', '');
        $('#password2').attr('value', '');
        $('#role').attr('value', '');
	})
});

</script>