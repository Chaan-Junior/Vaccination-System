

var nameError = document.getElementById('name-error');
var  emailError = document.getElementById('email-error');
var	addressError = document.getElementById('address-error');
var zipError = document.getElementById('Zip-error');
var cardNoError = document.getElementById('Card-error');

function validateName(){

	var name = document.getElementById('Name').value;

	if(name.length === 0) {
        alert ('Name is required');
        nameError.innerHTML='Name is required';
        return false;
    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML='Write full name';
        return false;
    }

    nameError.innerHTML = '<i class="fas fa-solid fa-check"></i>';
    return true;
}

function validateEmail(){

    var email = document.getElementById('Email').value;

    if (email.length === 0) {
        alert ('Email is required');
    
    }

    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        emailError.innerHTML = 'Email invalid'
        return false;
    }

    emailError.innerHTML = '<i class="fas fa-solid fa-check"></i>';
    return true;
}

function validateAddress(){

    var address = document.getElementById('Address').value;

    if (address.length === 0) {
        alert ('Type address properly');
        
    }
    if (!address.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        addressError.innerHTML='type in correct format';
        return false;

    addressError.innerHTML = '<i class="fas fa-solid fa-check"></i>';
    return true;

}
}

function validateZip() {

    var zipcode = document.getElementById('Zip').value;

    if (!zipcode.match( /^\d{5}(-\d{4})?$/)) {
        zipError.innerHTML = 'Zipcode invalid'
        return false;
    }    

    zipError.innerHTML = '<i class="fas fa-solid fa-check"></i>';
    return true;
}

function validateCardNo(){

    var cardno = document.getElementById('CardNo').value;

    if (cardno.length == 0) {
        alert ('Insert card Number');
        
    }
    if (!cardno.match(/^(?:3[47][0-9]{13})$/)) {
        cardNoError.innerHTML = 'Not a valid card number'
        return false;
    }

    cardNoError.innerHTML = '<i class="fas fa-solid fa-check"></i>';
    return true;
}
