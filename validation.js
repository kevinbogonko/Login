const form = document.getElementById('myForm');
const username = document.getElementById('user_name');
const password = document.getElementById('password');

form.addEventListener('submit', (e) => {
    e.preventDefault(); // Prevent default form submission

    if (validateInputs()) {
        // If validation succeeds, submit the form
        form.submit(); // This will trigger the form submission
    }
});

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        setError(username, 'Username is required');
        return false; // Return false to indicate validation failure
    } else {
        setSuccess(username);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
        return false; // Return false to indicate validation failure
    } else {
        setSuccess(password);
    }

    return true; // Return true to indicate validation success
};

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error small');
    const errorStyle = inputControl.querySelector('input');

    errorStyle.classList.remove('suc');
    errorStyle.classList.add('err');
    errorDisplay.innerText = message;
};

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error small');
    const errorStyle = inputControl.querySelector('input');

    errorStyle.classList.remove('err');
    errorStyle.classList.add('suc');

    errorDisplay.innerText = '';

};
