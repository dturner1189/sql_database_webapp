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

  $("#search").click(function(){
    var id = getQueryVariable("id");
    alert("Lets see what your qualified for");
    window.location.replace("individuallist.php?id=" + id);
    });

  $("#edit").click(function(){
    var id2 = getQueryVariable("id");
    alert("Lets edit your account");
    window.location.replace("edit.php?id=" + id2);
    });

  $("#gen").click(function(){
    var id3 = getQueryVariable("id");
    alert("Lets look at all available Scholarships");
    window.location.replace("scholarshiplist.php?id=" + id3);
    });

    $("#advsearch").click(function(){
      var id4 = getQueryVariable("id");
      alert("Lets do a high powered search");
      window.location.replace("search.php?id=" + id4);
      });

});
