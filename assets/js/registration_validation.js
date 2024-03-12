document.addEventListener('DOMContentLoaded', function () {
    // Select the form element
    var form = document.querySelector('form.needs-validation');

    // Add a submit event listener to the form
    form.addEventListener('submit', function (event) {
        // Validate the name field
        var nameField = document.getElementById('name');
        if (!validateName(nameField.value)) {
            showError(nameField);
            event.preventDefault();
            return;
        }

        // Validate the email field
        var emailField = document.getElementById('email');
        if (!validateEmail(emailField.value)) {
            showError(emailField);
            event.preventDefault();
            return;
        }

        // Validate the password field
        var passwordField = document.getElementById('password');
        if (!validatePassword(passwordField.value)) {
            showError(passwordField);
            event.preventDefault();
            return;
        }

        // Validate the repeat password field
        var repeatPasswordField = document.getElementById('repeat_password');
        if (!validateRepeatPassword(passwordField.value, repeatPasswordField.value)) {
            showError(repeatPasswordField);
            event.preventDefault();
            return;
        }
    });

    // Function to validate name (allow only letters and spaces)
    function validateName(name) {
        var regex = /^[A-Za-z\s]+$/;
        return regex.test(name);
    }

    // Function to validate email
    function validateEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Function to validate password (you can customize the regex for your requirements)
    function validatePassword(password) {
        // Example regex: at least 8 characters, at least one uppercase letter, one lowercase letter, and one number
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        return regex.test(password);
    }

    // Function to validate repeat password
    function validateRepeatPassword(password, repeatPassword) {
        return password === repeatPassword;
    }

    // Function to show error message
    function showError(input) {
        input.classList.add('is-invalid');
    }
});