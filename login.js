$(document).ready(function(){

  $("#newuser").click(function() {
    alert("Lets get you set up with a new account");
    window.location.replace("newuser.php");
  })

  $("#login").click(function(){

    var user = $("#user").val().trim();
    var password = $("#password").val().trim();

    // Checking for blank fields.
    if( user =='' || password ==''){
      $('input[type="text"],input[type="password"]').css("border","2px solid red");
      $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
      alert("Please dont leave anything blank");
    }
    else {
      $.post("login.php",{ user1: user, password1: password},

      function(data) {
        if (data == 1) {
          $("form")[0].reset();
          $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
          alert("Welcome Database Administrator: David");
          window.location.replace("administrator.php?id=" + user);
        }
        else if (data == 2) {
          $("form")[0].reset();
          $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
          alert("Cheers, Login Successfull to Grantors page");
          window.location.replace("grantor.php?id=" + user);
        }
        else if(data == 3) {
          $("form")[0].reset();
          $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
          alert("Cheers, Login Successfull mate");
          window.location.replace("studenthome.php?id="+user);
        }
        else if (data == 4) {
          alert("Username or password not found..Did you mean to make an account?");
        }
        else {
          alert("Maybe try reloading the page and trying again");
        }
      }); // End of fuction(data);
    } /* End of else*/
  }); // End of login.click function


}); // End of ready function
