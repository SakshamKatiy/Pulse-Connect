
var hospital_card = document.getElementById('hospital_card');
var hospital_login = document.getElementById('hospital_login');
var close_button = document.getElementById('close-button');

hospital_login.addEventListener('click', function() {
  hospital_card.style.display = 'inline';
});

close_button.addEventListener('click', function() {
  hospital_card.style.display = 'none';
});