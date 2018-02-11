
$(function() {
    $(".signup").click(function() {
      var username = $('#username').val();
      var password = $('#password').val();
      var rep_password = $('#rep_password').val();
      var email = $('#email').val();
      var city = $('#city').val();

      if (username == "" || password == "" || email == "" || city == "")
      {
      	alert("Enter all info");
      }
      else if (password!=rep_password)
      {
      	alert("Passwords do not match");
      }
      else
      {
      	$.ajax({
	      	url: "reg.php",
	      	type: "POST",
	      	data: {username:username, password:password,rep_password: rep_password, email:email, city:city},
	      	dataType: "json",
	      	success: function(data){
            console.log(data);
	      		document.location.href = 'http://localhost/acceptic';
      	}
	      });
	    return false;
      }
    });
  });