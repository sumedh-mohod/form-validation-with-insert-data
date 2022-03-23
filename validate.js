const name = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const state = document.getElementById('state');
const country = document.getElementById('country');
const message = document.getElementById('message');

let validName = false;
let validEmail = false;
let validPhone = false;
let validState = false;
let validCountry = false;
let validMessage = false;

// error message
const name_msg = document.getElementById("name_msg");
const email_msg = document.getElementById("email_msg");
const phone_msg = document.getElementById("phone_msg");
const state_msg = document.getElementById("state_msg");
const country_msg = document.getElementById("country_msg");

// starting display
name_msg.style.display = "none";
email_msg.style.display = "none";
phone_msg.style.display = "none";
state_msg.style.display = "none";
country_msg.style.display = "none";

// name
name.addEventListener('blur', () => {
    // Validate name here
    let regex = /[a-zA-Z][a-zA-Z ]+[a-zA-Z]{2,20}$/;
    let str = name.value;
    console.log(regex, str);
    if (regex.test(str)) {
        name.classList.remove('is-invalid');
        name.classList.add('is-valid');
        name_msg.style.display = "none";
        validName = true;
    }
    else {
        name.classList.add('is-invalid');
        name.classList.remove('is-valid');
        name_msg.style.display = "block";
        validName = false;
    }
})

// emil
email.addEventListener('blur', () => {
    // Validate email here
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let str = email.value;
    console.log(regex, str);
    if (regex.test(str)) {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
        email_msg.style.display = "none";
        validEmail = true;
    }
    else {
        email.classList.add('is-invalid');
        email.classList.remove('is-valid');
        email_msg.style.display = "block";
        validEmail = false;
    }
})

// phone
phone.addEventListener('blur', () => {
    // Validate phone here
    let regex = /^([0-9]){10}$/;
    let str = phone.value;
    console.log(regex, str);
    if (regex.test(str)) {
        phone.classList.remove('is-invalid');
        phone.classList.add('is-valid');
        phone_msg.style.display = "none";
        validPhone = true;
    }
    else {
        phone.classList.add('is-invalid');
        phone.classList.remove('is-valid');
        phone_msg.style.display = "block";
        validPhone = false;
    }
});

// state
state.addEventListener('blur', () => {
    // Validate state here
    let regex = /[a-zA-Z][a-zA-Z ]+[a-zA-Z]{2,20}$/;
    let str = state.value;
    console.log(regex, str);
    if (regex.test(str)) {
        state.classList.remove('is-invalid');
        state.classList.add('is-valid');
        state_msg.style.display = "none";
        validState = true;
    }
    else {
        state.classList.add('is-invalid');
        state.classList.remove('is-valid');
        state_msg.style.display = "block";
        validState = false;
    }
})

// country
country.addEventListener('blur', () => {
    // Validate state here
    let regex = /[a-zA-Z][a-zA-Z ]+[a-zA-Z]{2,20}$/;
    let str = state.value;
    if (regex.test(str)) {
        country.classList.remove('is-invalid');
        country.classList.add('is-valid');
        country_msg.style.display = "none";
        validCountry = true;
    }
    else {
        country.classList.add('is-invalid');
        country.classList.remove('is-valid');
        country_msg.style.display = "block";
        validCountry = false;
    }
})

// submition
let submit = document.getElementById('submit');
submit.addEventListener('click', (e) => {
    // e.preventDefault();

    console.log('You clicked on submit');
    if (validName) {
        name.classList.remove('is-invalid');
        name_msg.style.display = "none";
    } else {
        name.classList.add('is-invalid');
        name_msg.style.display = "block";
    }

    if (validEmail) {
        email.classList.remove('is-invalid');
        email_msg.style.display = "none";
    } else {
        email.classList.add('is-invalid');
        email_msg.style.display = "block";
    }

    if (validPhone) {
        phone.classList.remove('is-invalid');
        phone_msg.style.display = "none";
    } else {
        phone.classList.add('is-invalid');
        phone_msg.style.display = "block";
    }

    if (validState) {
        state.classList.remove('is-invalid');
        state_msg.style.display = "none";
    } else {
        state.classList.add('is-invalid');
        state_msg.style.display = "block";
    }

    if (validCountry) {
        country.classList.remove('is-invalid');
        country_msg.style.display = "none";
    } else {
        country.classList.add('is-invalid');
        country_msg.style.display = "block";
    }
});