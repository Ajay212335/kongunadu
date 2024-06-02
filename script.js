const navbarMenu = document.querySelector(".const .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");



// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});



// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());
// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());








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



document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    const prevMonthBtn = document.getElementById("prevMonthBtn");
    const nextMonthBtn = document.getElementById("nextMonthBtn");
    const currentMonthYear = document.getElementById("currentMonthYear");
    const datesContainer = document.getElementById("dates");

    prevMonthBtn.addEventListener("click", () => changeMonth(-1));
    nextMonthBtn.addEventListener("click", () => changeMonth(1));

    renderCalendar(currentMonth, currentYear);

    function changeMonth(change) {
        currentMonth += change;
        if (currentMonth === 12) {
            currentMonth = 0;
            currentYear += 1;
        } else if (currentMonth === -1) {
            currentMonth = 11;
            currentYear -= 1;
        }
        renderCalendar(currentMonth, currentYear);
    }

    function renderCalendar(month, year) {
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startingDay = firstDayOfMonth.getDay();

        currentMonthYear.textContent = `${getMonthName(month)} ${year}`;

        datesContainer.innerHTML = "";

        for (let i = 0; i < startingDay; i++) {
            const prevMonthDate = document.createElement("div");
            prevMonthDate.classList.add("date");
            prevMonthDate.textContent = "";
            datesContainer.appendChild(prevMonthDate);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dateElement = document.createElement("div");
            dateElement.classList.add("date");
            dateElement.textContent = i;
            if (currentDate.getDate() === i && currentDate.getMonth() === month && currentDate.getFullYear() === year) {
                dateElement.classList.add("currentMonthDate");
            }
            datesContainer.appendChild(dateElement);
        }
    }

    function getMonthName(month) {
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        return monthNames[month];
    }
});
