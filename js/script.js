/*--Name: Lei Luo 
File:script.js
Date: July 23, 2023
Description: Using client-side form validation using DOM manipulation
*/



function validate() {
    let email = document.getElementById('email').value.trim();
    let login = document.getElementById('login').value.trim();
    let pass = document.getElementById('pass').value;
    let pass2 = document.getElementById('pass2').value;

    let terms = document.getElementById('terms').checked;

    removeErrorMessages();

    let isValid = true;
    // email validation
    let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!pattern.test(email)) {
        addErrorMessage(document.getElementById('email'), "Email should be non-empty with the format xyx@xyz.xyz.");
        isValid = false;

    }

    // login validation
    if (login == '' || login.length > 20) {
        addErrorMessage(document.getElementById('login'), 'User name should be non-empty and within 20 characters long');
        isValid = false;
    }


    // password validation
    if (pass.length < 6 || !pass.match(/^(?=.*[a-z])(?=.*[A-Z]).+$/)) {
        addErrorMessage(document.getElementById('pass'), 'Password should be at least 6 characters, 1 uppercase, 1 lowercase');
        isValid = false;
    }
    // password match validation
    if (pass != pass2) {
        addErrorMessage(document.getElementById('pass2'), 'Please retype password.');
        isValid = false;
    }


    // Ensure that the terms and conditions are accepted
    if (!terms) {
        addErrorMessage(document.getElementById('terms'), 'Please accept terms and conditions');
        isValid = false;
    }

    // If form is valid, then do the following
    if (isValid) {
        //providing the submitted data in the URI.  
        window.location.href = window.location.href + '?' + 'email=' + email + '&login=' + login;

        //On a successful submission the form should call itself clearing its contents 
        document.getElementById('form').reset();
    }
    return isValid;


}


// Function to add an error message
function addErrorMessage(element, message) {
    let error = document.createElement('div');
    error.className = 'error-message';
    error.style.color = 'red';
    error.innerHTML = message;
    element.parentNode.appendChild(error);
}

// Function to remove existing error messages
function removeErrorMessages() {
    let errors = document.getElementsByClassName('error-message');
    while (errors[0]) {
        errors[0].parentNode.removeChild(errors[0]);
    }


}

// Event listener for newsletter checkbox
window.onload = function () {
    document.getElementById('newsletter').addEventListener('change', function () {
        if (this.checked) {
            alert('Beware of possible spam!');
        }
    });
}