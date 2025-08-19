document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.querySelector('#password');
    const passwordButton = document.querySelector('#show-password');
    const passwordIcon = document.querySelector('#password-icon');

    passwordButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    });

    const hamburgerButton = document.querySelector('#close-sidebar');
    const sidebar = document.querySelector('aside');

    hamburgerButton.addEventListener('click', function (e) {
        e.preventDefault();

        sidebar.classList.toggle('scale-x-100');
        sidebar.classList.toggle('scale-x-0');
    });
});