// JavaScript Document

$(function(){
  $("#menuButton").click(function(){
    if($("#nav").css("display")=="block"){
      $("#nav:not(:animated)").slideUp("fast");
        }else{
          $("#nav").slideDown("fast");
        }
    });
});
