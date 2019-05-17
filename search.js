$(document).ready(function(){

  function getQueryVariable(variable) {
     var query1 = window.location.search.substring(1);
     var vars1 = query.split("&");
     for (var i=0;i<vars1.length;i++) {
             var pair1 = vars1[i].split("=");
             if(pair1[0] == variable){return pair1[1];}
     }
     return(false);
   }

  $("#search2").click(function(){
    var id = getQueryVariable("id");
    var byname = $("#sname").val().trim();
    var byhsgpa = $("#hsgpa").val().trim();
    var bycogpa = $("#cogpa").val().trim();
    var bygender = $("#gender").val().trim();
    var byincome = $("#income").val().trim();
    var byprevcoll = $("#prevcoll").val().trim();
    var byservhrs = $("#servhrs").val().trim();
    var bycitizanship = $("#citizan").val().trim();
    var bysports = $("#sports").val().trim();
    var bymajor = $("#major").val().trim();
    var byhonors = $("#honors").val().trim();
    var bystudyabroad = $("#studyabroad").val().trim();

    byhsgpa = byhsgpa / 100;
    bycogpa = bycogpa / 100;
    alert("please");
    var radios = document.getElementsByName('gender');
    for (var i = 0, length = radios.length; i < length; i++) {
     if (radios[i].checked) {
      bygender = radios[i].value;
      break;
     }
    }
    var radios2 = document.getElementsByName('citizan');
    for (var i = 0, length = radios2.length; i < length; i++) {
     if (radios2[i].checked) {
      bycitizanship = radios2[i].value;
      break;
     }
    }
    var radios3 = document.getElementsByName('honors');
    for (var i = 0, length = radios3.length; i < length; i++) {
     if (radios3[i].checked) {
      byhonors = radios3[i].value;
      break;
     }
    }
    var radios4 = document.getElementsByName('studyabroad');
    for (var i = 0, length = radios4.length; i < length; i++) {
     if (radios4[i].checked) {
      bystudyabroad = radios4[i].value;
      break;
     }
    }

     alert(id + ' ' + byname + ' ' + byhsgpa + ' ' + bycogpa + ' ' +
          bygender + ' ' + byincome + ' ' + byprevcoll + ' ' +
          byservhrs + ' ' + bysports + ' ' + bymajor + ' ' +
          byhonors + ' ' + bystudyabroad + ' ');


    $.post("customsearch.php",{ id1: id,
       byname1: byname,
       byhsgpa1: byhsgpa,
       bycogpa1: bycogpa,
       bygender1: bygender,
       byincome1: byincome,
       byprevcoll1: byprevcoll,
       byservhrs1: byservhrs,
       bycitizanship1: bycitizanship,
       bysports1: bysports,
       bymajor1: bymajor,
       byhonors1: byhonors,
       bystudyabroad1: bystudyabroad
     },
    function(data) {
      if (data == 1) {
        alert("Looks like we have a scholarship matching your search criteria");
        window.location.replace("individuallist.php?id=" + id);
      }
      else if (data == 2) {
        alert("Nothing found matching your search criteria, try changing some values");
      }
      else {
        alert("Maybe try reloading the page and trying again");
      }
    }); // End of fuction(data);
  }); // End of login.click function

}); // End of ready function
