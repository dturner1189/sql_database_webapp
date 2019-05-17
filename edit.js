$(document).ready(function(){
  function getQueryVariable(variable) {
     var query = window.location.search.substring(1);
     var vars = query.split("&");
     for (var i=0;i<vars.length;i++) {
             var pair = vars[i].split("=");
             if(pair[0] == variable){return pair[1];}
     }
     return(false);
   }

  var id = getQueryVariable("id");

  $("#makeedit").click(function(){

    var field;
    var value = $("#thechange").val().trim();

    var radios = document.getElementsByName('fieldchange');
    for (var i = 0, length = radios.length; i < length; i++) {
     if (radios[i].checked) {
      field = radios[i].value;
      break;
     }
    }

    var valid = 1;
    switch (field) {
      case "Email":
        alert("Attempting to change email");
        break;
      case "Gender":
        alert("Attempting to change gender");
        break;
      case "ServiceHours":
        alert("Attempting to change service hours");
        break;
      case "Citizanship":
        alert("Attempting to change citizanship status");
        break;
      case "Major":
        alert("Attempting to change Major");
        break;
      case "Sports":
        alert("Attempting to change sports played");
        break;
      case "HonorsProgram":
        alert("Attempting to change honors");
        break;
      case "StudyAbroad":
        alert("Attempting to change study abroad stauts");
        break;

      default:
      valid=0;
        alert("bad selection");
        break;
    }
    alert(field + value);
    if( value = '' ){
      $('input[type="text"]').css("border","2px solid red");
      $('input[type="text"]').css("box-shadow","0 0 3px red");
      alert("You have to tell me what to edit");
    }

    if (valid == 1) {
      $.post("makeedit.php",{ user1: id, field1: field, value1: value},

      function(data) {
        if (data == 1) {
          $("form")[0].reset();
          alert("Edit Conformed!");
          window.location.replace("studenthome.php?id=" + id);
        }
        else if (data == 2) {
          $("form")[0].reset();
          alert("Unable to make that change");
        }
        else {
          alert("Somthings gone terriably wrong");
        }
      }); // End of fuction(data);
    }
    else {
      alert("Try searching with better criteria");
    }
  });



});
