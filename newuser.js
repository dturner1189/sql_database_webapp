$(document).ready(function() {

  $("#make").click(function() {

    var name = $("#name").val().trim();
    var user = $("#user").val().trim();
    var password = $("#pass").val().trim();
    var repass = $("#repass").val().trim();

    var hsgpa = $("#hsgpa").val().trim();
    var collgpa = $("#collgpa").val().trim();
    var sports = $("#sports").val().trim();

    var major = $("#major").val().trim();
    var email = $("#email").val().trim();
    var gender = $("#gender").val().trim();

    var income = $("#income").val().trim();
    var prevcoll = $("#prevcoll").val().trim();
    var servhrs = $("#servhrs").val().trim();

    var citizan = $("#citizan").val().trim();
    var honors = $("#honors").val().trim();
    var studyabroad = $("#studyabroad").val().trim();


    if( user =='' || password =='' || name == '' || repass == ''){
      $('input[type="text"],input[type="password"]').css("border","2px solid red");
      $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
      alert("Please dont leave Name, Username, or Password blank at the minimum");
    }
    else if (password !== repass) {
      $('input[type="text"],input[type="password"]').css("border","2px solid red");
      $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
      alert("Passwords Dont Match");
    }
    else {
    $.post("create.php",{ name1: name,
                          user1: user,
                          password1: password,
                          repass1: repass,
                          hsgpa1: hsgpa,
                          collgpa1: collgpa,
                          sports1: sports,
                          major1: major,
                          email1: email,
                          gender1: gender,
                          income1: income,
                          prevcoll1: prevcoll,
                          service1: servhrs,
                          citizan1: citizan,
                          honors1: honors,
                          studyabroad1: studyabroad
                         },

            function(data) {
                if (data == 1){
                  alert("Username already taken muchacho");
                }
                else if (data == 2) {
                  $("form")[0].reset();
                  $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                  alert("Great! A new Acct is made");
                  window.location.replace("index.html");
                }
                else {
                  alert("wasnt able to make you a new account, try again");
                }
              }); // End of fuction(data);
            } /* End of else*/
          }); /* End of #make button press */
});
