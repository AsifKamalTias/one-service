//edit profile validation
const editProfileForm = document.getElementById('edit-profile-form');
const editProfileUsernameInput = document.getElementById('edit-profile-username');
const editProfilePasswordInput = document.getElementById('edit-profile-password');
const editProfileUsernameError = document.getElementById('edit-profile-username-error');
const editProfilePasswordError = document.getElementById('edit-profile-password-error');

editProfileForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (editProfileUsernameInput.value === '') 
    {
        editProfileUsernameError.style.visibility = 'visible';
        editProfileUsernameError.innerHTML = 'Username is required';
    } 
    else 
    {
        editProfileUsernameError.style.visibility = 'hidden';
    }

    if (editProfilePasswordInput.value === '')
    {
        editProfilePasswordError.style.visibility = 'visible';
        editProfilePasswordError.innerHTML = 'Password is required';
    }
    else if(editProfilePasswordInput.value.length < 8)
    {
        editProfilePasswordError.style.visibility = 'visible';
        editProfilePasswordError.innerHTML = 'Password must be at least 8 characters long';
    }
    else 
    {
        editProfilePasswordError.style.visibility = 'hidden';
    }

    if (editProfileUsernameInput.value !== '' && editProfilePasswordInput.value !== '' && editProfilePasswordInput.value.length >= 8) {
        editProfileForm.submit();
    }
});