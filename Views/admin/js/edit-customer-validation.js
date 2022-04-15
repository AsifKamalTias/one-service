const editCustomerForm = document.getElementById('edit-customer-form');
const nameInput = document.getElementById('customer_name');
const usernameInput = document.getElementById('customer_username');
const emailInput = document.getElementById('customer_email');
const phoneInput = document.getElementById('customer_phone');
const addressInput = document.getElementById('customer_address');
const passwordInput = document.getElementById('customer_password');
const blockedInput = document.getElementById('customer_blocked');
const unblockedInput = document.getElementById('customer_unblocked');
const nameError = document.getElementById('customer-name-error');
const usernameError = document.getElementById('customer-username-error');
const emailError = document.getElementById('customer-email-error');
const phoneError = document.getElementById('customer-phone-error');
const addressError = document.getElementById('customer-address-error');
const passwordError = document.getElementById('customer-password-error');
const blockStatusError = document.getElementById('customer-block-status-error');

editCustomerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if(nameInput.value === '') {
        nameError.innerHTML = 'Name is required';
        nameError.style.visibility = 'visible';
    } 
    else {
        nameError.style.visibility = 'hidden';
    }

    if(usernameInput.value === '') {
        usernameError.innerHTML = 'Username is required';
        usernameError.style.visibility = 'visible';
    }
    else
    {
        usernameError.style.visibility = 'hidden';
    }

    if(emailInput.value === '') {
        emailError.innerHTML = 'Email is required';
        emailError.style.visibility = 'visible';
    }
    else
    {
        emailError.style.visibility = 'hidden';
    }

    if(phoneInput.value === '') {
        phoneError.innerHTML = 'Phone is required';
        phoneError.style.visibility = 'visible';
    }
    else
    {
        phoneError.style.visibility = 'hidden';
    }

    if(addressInput.value === '') {
        addressError.innerHTML = 'Address is required';
        addressError.style.visibility = 'visible';
    }
    else
    {
        addressError.style.visibility = 'hidden';
    }

    if(passwordInput.value === '') {
        passwordError.innerHTML = 'Password is required';
        passwordError.style.visibility = 'visible';
    }
    else
    {
        passwordError.style.visibility = 'hidden';
    }

    if(passwordInput.value.length < 8) {
        passwordError.innerHTML = 'Password must be at least 8 characters long';
        passwordError.style.visibility = 'visible';
    }

    if(blockedInput.checked === false && unblockedInput.checked === false) {
        blockStatusError.innerHTML = 'Block status is required';
        blockStatusError.style.visibility = 'visible';
    } 
    else 
    {
        blockStatusError.style.visibility = 'hidden';
    }

    if(nameInput.value !== '' && usernameInput.value !== '' && emailInput.value !== '' && phoneInput.value !== '' && addressInput.value !== '' && passwordInput.value !== '' && passwordInput.value.length>=8 && (blockedInput.checked === true || unblockedInput.checked === true)) {
        editCustomerForm.submit();
    }
});