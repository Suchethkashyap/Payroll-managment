
var $rows=$('#emp_search tr');
$(document).ready(function(){
    table.innerhtml='';
    $("#myInput").keyup(function(){
    //   alert("The Inputwas clicked.");
    var value = $(this).val().toLowerCase();
    $("#body tr").filter(function() {
        $(this).toggle($(this).text()
        .toLowerCase().indexOf(value) > -1)
    });
  });