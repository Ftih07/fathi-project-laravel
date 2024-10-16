const wrapper = document.querySelector(".wrapper");
const registerLink = document.querySelector(".register-link");
const loginLink = document.querySelector(".login-link");

registerLink.onclick = () => {
    wrapper.classList.add("active");
};

loginLink.onclick = () => {
    wrapper.classList.remove("active");
};

// Login Form
document
    .getElementById("loginForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        const correctUsername = "Anton";
        const correctPassword = "Skibidi";

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (username == correctUsername && password == correctPassword) {
            alert("Login Berhasil");
            window.location.href = "/index";
        } else {
            alert("Username atau password salah");
        }
    });
