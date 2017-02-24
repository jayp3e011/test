$(function(){
	$('#loginalert').hide();
	$('#btnlogin').click(function(event){
		event.preventDefault();
		console.log("clicked");
		$.ajax({
	        method: "POST",
	        url: "../app/models/login.php",
	        data:{
	        	email:$('#txtloginemail').val(),
	        	password:$('#txtloginpassword').val()
	        }
	    }).done(function(res){
	    	let user = JSON.parse(res);
	    	// console.log(user);
	    	if(user.length>0){
	    		if(user[0].isadmin=="1"){
	    			console.log("Welcome admin!");
	    		}
	    		else{
	    			console.log("Welcome student!");
	    			window.location = "/test/public/?page=dashboard";
	    		}
	    	}
	    	else{
	    		console.log("Login failed");	    		
	    		$('#loginalert').show();
	    		setTimeout(function(){
					$('#loginalert').hide();
	    		},3000);
	    	}
	    });
	});
});