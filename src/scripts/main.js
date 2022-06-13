document.getElementById('send').onclick = function() {
    let inputCountry = document.getElementById("country");
    localStorage.setItem("country", inputCountry.value);
    let inputCity = document.getElementById("city");
    localStorage.setItem("city", inputCity.value);
    let inputStreet = document.getElementById("street");
    localStorage.setItem("street", inputStreet.value);
    let inputHouse = document.getElementById("house");
    localStorage.setItem("house", inputHouse.value);
    let inputFlat = document.getElementById("flat");
    localStorage.setItem("flat", inputFlat.value);

    let inputPromocode = document.getElementById("promocode");
    localStorage.setItem("promocode", inputPromocode.value);

    let inputSurname = document.getElementById("surname");
    localStorage.setItem("surname", inputSurname.value);
    let inputName = document.getElementById("name");
    localStorage.setItem("name", inputName.value);
    let inputEmail = document.getElementById("email");
    localStorage.setItem("email", inputEmail.value);
    let inputTel = document.getElementById("tel");
    localStorage.setItem("tel", inputTel.value);
}