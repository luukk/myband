$("#output").hide();
window.addEventListener("load",function(){
  var output = $("#output").length;
  setInterval(function(){
    if( $('#output').is(':empty') ) {
      $("#output").hide();
    }else{
      $("#output").show();
    }
  });
  $("#disclamer_background").click(function(){
    $(this).hide();
  })
})
