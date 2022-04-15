//signin form validation
const signInForm = document.getElementById('sign-in-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const usernameError = document.getElementById('username-error');
const passwordError = document.getElementById('password-error');

signInForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (usernameInput.value === '') 
    {
        usernameError.style.display = 'block';
    } 
    else 
    {
        usernameError.style.display = 'none';
    }
    if (passwordInput.value === '') 
    {
        passwordError.style.display = 'block';
    } 
    else 
    {
        passwordError.style.display = 'none';
    }
    if (usernameInput.value !== '' && passwordInput.value !== '') {
        signInForm.submit();
    }
});