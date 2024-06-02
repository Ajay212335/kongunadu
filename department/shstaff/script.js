const navbarMenu = document.querySelector(".const .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");

// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());

// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});



document.addEventListener("DOMContentLoaded", function() {
    var slides = document.querySelectorAll(".slide");
    var currentSlide = 0;

    function nextSlide() {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add("active");
    }

    setInterval(nextSlide, 3000);
});





var users = [];

function register() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Check if username already exists
    var userExists = users.find(function(user) {
        return user.username === username;
    });

    if (userExists) {
        alert("Username already exists. Please choose a different username.");
        return;
    }

    // Store user information
    users.push({ username: username, password: password });
    alert("Registration successful. You can now login.");
}

function login() {
    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;

    // Check if username and password match
    var user = users.find(function(user) {
        return user.username === username && user.password === password;
    });

    if (user) {
        document.getElementById('loginMessage').innerText = "Login successful!"
        window.location.href = "main.html";
    } else {
        document.getElementById('loginMessage').innerText = "Invalid username or password.";
    }
}
