"use strict";

if (document.getElementById('send') != null) {
  document.getElementById('send').onclick = function () {
    var inputCountry = document.getElementById("country");
    localStorage.setItem("country", inputCountry.value);
    var inputCity = document.getElementById("city");
    localStorage.setItem("city", inputCity.value);
    var inputStreet = document.getElementById("street");
    localStorage.setItem("street", inputStreet.value);
    var inputHouse = document.getElementById("house");
    localStorage.setItem("house", inputHouse.value);
    var inputFlat = document.getElementById("flat");
    localStorage.setItem("flat", inputFlat.value);
    var inputPromocode = document.getElementById("promocode");
    localStorage.setItem("promocode", inputPromocode.value);
    var inputSurname = document.getElementById("surname");
    localStorage.setItem("surname", inputSurname.value);
    var inputName = document.getElementById("name");
    localStorage.setItem("name", inputName.value);
    var inputEmail = document.getElementById("email");
    localStorage.setItem("email", inputEmail.value);
    var inputTel = document.getElementById("tel");
    localStorage.setItem("tel", inputTel.value);
  };
}