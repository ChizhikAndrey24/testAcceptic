$(function() {
  $(".edit_info").click(function() {
      var email = $('#new_email').val();
      var city = $('#new_city').val();

      if ( email == "" || city == "")
      {
        alert("Enter all info");
      }
      else
      {
        //alert("Updating...");
        $.ajax({
          url: "edit.php",
          type: "POST",
          data: {email: email, city: city},
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

function showPopup() {
	$(".popup").fadeIn(800);
}

function hidePopup(){	
		$(".popup").fadeOut(800);
	}