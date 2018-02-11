$(function() {
  $(".login").click(function() {
      var username = $('#log_username').val();
      var password = $('#log_password').val();

      if (username == "" || password == "")
      {
        alert("Enter correct info!");
        return false;
      }
      else
      {
        //alert("Log in...");
        $.ajax({
          url: "log.php",
          type: "POST",
          data: {username: username, password: password},
          dataType: "json",
          success: function(result){
          console.log(result);
          document.location.href = 'http://localhost/acceptic';
        }
        });
        return false;
      }
    }
    );
});