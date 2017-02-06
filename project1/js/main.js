$(document).ready(function() {
  $('.detailed-info').hide();

  $('#softwareShow').click(function() {
    btnToggle("#softwareShow", "#softwarePane");
  });

  $('#pianistShow').click(function() {
    btnToggle("#pianistShow", "#pianistPane");
  });

  $('#LPCShow').click(function() {
    btnToggle("#LPCShow", "#LPCPane");
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
