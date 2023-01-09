function form_validate() {
  //*Validation of full name
  var fullname = document.getElementById("fname").value;

  if (fullname == "") {
    alert("please fill the name");
    document.getElementById("fname").focus();
    return false;
  } else if (fullname.length < 3 || fullname.length > 15) {
    alert(" the name charecter must be between 3 and 15");
    document.getElementById("fname").focus();
    return false;
  }

  //*Validation of mobile number
  var phone = document.getElementById("mobile").value;

  if (phone == "") {
    alert("please fill the phone number");
    document.getElementById("mobile").focus();
    return false;
  } else if (isNaN(phone)) {
    alert("mobile number must be only digit");
    document.getElementById("mobile").focus();
    return false;
  } else if (phone.length < 10 || phone.length > 10) {
    alert("mobile number must be 10 digit");
    document.getElementById("mobile").focus();
    return false;
  }

  var phone2 = document.getElementById("amobile").value;

  if (phone2 == "") {
    alert("please fill the other mobile number");
    document.getElementById("amobile").focus();
    return false;
  } else if (isNaN(phone2)) {
    alert("other mobile number must be only digit");
    document.getElementById("amobile").focus();
    return false;
  } else if (phone2.length < 10 || phone2.length > 10) {
    alert(" other mobile number must be 10 digit");
    document.getElementById("amobile").focus();
    return false;
  }

  //* validation of pin number
  var pin = document.getElementById("pin").value;

  if (pin == "") {
    alert("please fill the pin code");
    document.getElementById("pin").focus();
    return false;
  } else if (isNaN(pin)) {
    alert("pin code must be only digit");
    document.getElementById("pin").focus();
    return false;
  }
  //* validation of district
  var district = document.getElementById("dsrt").value;

  if (district == "") {
    alert("please fill the district name");
    document.getElementById("dsrt").focus();
    return false;
  }

  //* validation of district
  var city = document.getElementById("city").value;

  if (city == "") {
    alert("please fill the city name");
    document.getElementById("city").focus();
    return false;
  }
  //* validation of district
  var address = document.getElementById("add").value;

  if (address == "") {
    alert("please fill the your address");
    document.getElementById("add").focus();
    return false;
  }
  //**validation of select tag */

  var state = document.getElementById("stat");

  if (state.value == "") {
    alert("please choose the state");
    document.getElementById("stat").focus();
    return false;
  }
}
