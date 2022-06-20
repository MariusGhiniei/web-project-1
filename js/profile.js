//make input editable 

const emailInput = document.getElementById('profile-email');
const usernameInput = document.getElementById('profile-username');

const editEmail = document.getElementById('edit-email');
const editUsername = document.getElementById('edit-username');

editEmail.addEventListener('click', () => {
    document.getElementById('profile-email').disabled = false;
});

editUsername.addEventListener('click', () => {
    document.getElementById('profile-username').disabled = false;
});

