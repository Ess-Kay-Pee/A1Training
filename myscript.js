
 //alert("aa");
//document.getElementById('reg').addEventListener('click', validateForm());

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else{
  	return true;
  }
}