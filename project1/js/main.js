$(document).ready(function() {
  console.log("js working");
  $('.detailed-info').hide();

  $('#softwareShow').click(function() {
    btnToggle("#softwareShow", "#softwarePane");
  });

  $('#pianistShow').click(function() {
    btnToggle("#pianistShow", "#pianistPane")
  });

});

function btnToggle(btnName, paneName) {
  if ($(btnName).html() == "SHOW DETAILS") {
    $(btnName).html("HIDE DETAILS");
    $(paneName).slideToggle("fast", "swing");
  } else {
    $(btnName).html("SHOW DETAILS");
    $(paneName).slideToggle("fast", "swing");
  }
}
