const moderatorUsername = document.getElementById('moderator_username');
const moderatorPassword = document.getElementById('moderator_password');
const moderatorUsernameError = document.getElementById('moderator-username-error');
const moderatorPasswordError = document.getElementById('moderator-password-error');
const editModeratorForm = document.getElementById('edit-moderator-form');

editModeratorForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (moderatorUsername.value === '') {
        moderatorUsernameError.innerHTML = 'Username is required';
        moderatorUsernameError.style.visibility = 'visible';
    } else {
        moderatorUsernameError.style.visibility = 'hidden';
    }
    if (moderatorPassword.value === '') {
        moderatorPasswordError.innerHTML = 'Password is required';
        moderatorPasswordError.style.visibility = 'visible';
    } else {
        moderatorPasswordError.style.visibility = 'hidden';
    }
    if(moderatorPassword.value.length < 8) {
        moderatorPasswordError.innerHTML = 'Password must be at least 8 characters long';
        moderatorPasswordError.style.visibility = 'visible';
    } else {
        moderatorPasswordError.style.visibility = 'hidden';
    }
    if (moderatorUsername.value !== '' && moderatorPassword.value !== '' && moderatorPassword.value.length >= 8) {
        editModeratorForm.submit();
    }
});