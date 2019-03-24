//miscellaneous scripts for the entire website
var check = function() {
  if (document.getElementById('pswd').value ==
    document.getElementById('pswd-repeat').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords not matching';
  }
}
