document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.getElementById('contact_form');
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');    

    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        if (validateForm()) {            
            $('#successModal').modal('show'); // Prikazivanje Bootstrap modala
        }
    });

    function validateForm() {
        var nameRegex = /^[A-Za-z\s]+$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!nameRegex.test(nameInput.value)) {
            nameInput.classList.add('is-invalid');
            return false;
        } else {
            nameInput.classList.remove('is-invalid');
        }

        if (!emailRegex.test(emailInput.value)) {
            emailInput.classList.add('is-invalid');
            return false;
        } else {
            emailInput.classList.remove('is-invalid');
        }

        if (messageInput.value.length < 20) {
            messageInput.classList.add('is-invalid');
            return false;
        } else {
            messageInput.classList.remove('is-invalid');
        }

        return true;
    }
});