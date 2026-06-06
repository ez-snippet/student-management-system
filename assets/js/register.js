let form = document.getElementById("form");

form.addEventListener("submit", (event) => {

    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let password = document.getElementById("password");

    let valid = true;

    // NAME
    if (name.value.trim() === "") {
        document.getElementById("e1").innerText = "Please enter your name";
        name.classList.add("fail");
        name.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e1").innerText = "";
        name.classList.add("ok");
        name.classList.remove("fail");
    }

    // EMAIL
    if (email.value.trim() === "") {
        document.getElementById("e2").innerText = "Please enter your email";
        email.classList.add("fail");
        email.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e2").innerText = "";
        email.classList.add("ok");
        email.classList.remove("fail");
    }

    // PASSWORD
    if (password.value.length < 8) {
        document.getElementById("e3").innerText = "Password must be at least 8 characters";
        password.classList.add("fail");
        password.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e3").innerText = "";
        password.classList.add("ok");
        password.classList.remove("fail");
    }

    // STOP FORM ONLY IF INVALID
    if (!valid) {
        event.preventDefault();
    }
});