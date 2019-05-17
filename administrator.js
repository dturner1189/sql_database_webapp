$(document).ready(function(){

  $("#delete").click(function(){

    var user = $("#user").val().trim();
    if( user ==''){
      $('input[type="text"]').css("border","2px solid red");
      $('input[type="text"]').css("box-shadow","0 0 3px red");
      alert("You have to tell me who to delete");
    }
    else if (user =='dpt16c') {
      $('input[type="text"]').css("border","2px solid red");
      $('input[type="text"]').css("box-shadow","0 0 3px red");
      alert("We cant get rid of the master admin account");
    }
    else {
      $.post("delete.php",{ user1: user},

      function(data) {
        if (data == 1) {
          $("form")[0].reset();
          alert("Person Deleted");
          window.location.replace("administrator.php?id=dpt16c");
        }
        else if (data == 2) {
          $("form")[0].reset();
          alert("Unable to delete");
          window.location.replace("administrator.php?id=dpt16c");
        }
        else {
          alert(user);
          window.location.replace("administrator.php?id=dpt16c");
        }
      }); // End of fuction(data);
    }
  });



});
