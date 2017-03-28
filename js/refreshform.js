$(document).ready(function() {
$("#submit").click(function() {
var login = $("#login").val();
var password = $("#password").val();
var phone = $("#phone").val();
var countrylist = $("#country-list").val();
var citylist = $("#city-list").val();

if (login == '' || password == '' || phone == '' || country-list == '' || city-list == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php", {
login: login,
password: password,
phone: phone,
country: country,
city: city
}, function(data) {
alert(data);
$('#form-register')[0].reset(); // To reset form fields
});
}
});
});