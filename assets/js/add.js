let form = document.getElementById("form");

form.addEventListener("submit", (event) => {

    let image = document.getElementById("image");
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let course = document.getElementById("hi");
    let fee = document.getElementById("fee");
    let number = document.getElementById("number");

    let valid = true;

    // IMAGE
    if (image.value.trim() === "") {
        document.getElementById("e1").innerText = "Please select the student image";
        image.classList.add("fail");
        image.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e1").innerText = "";
        image.classList.add("ok");
        image.classList.remove("fail");
    }

    // NAME
    if (name.value.trim() === "") {
        document.getElementById("e2").innerText = "Please enter student name";
        name.classList.add("fail");
        name.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e2").innerText = "";
        name.classList.add("ok");
        name.classList.remove("fail");
    }

    // EMAIL
    if (email.value.trim() === "") {
        document.getElementById("e3").innerText = "Please enter student email";
        email.classList.add("fail");
        email.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e3").innerText = "";
        email.classList.add("ok");
        email.classList.remove("fail");
    }

    // COURSE
    if (course.value === "") {
        document.getElementById("e4").innerText = "Please select a course";
        course.classList.add("fail");
        course.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e4").innerText = "";
        course.classList.add("ok");
        course.classList.remove("fail");
    }

    // FEE
    if (fee.value.trim() === "") {
        document.getElementById("e5").innerText = "Please enter course fee";
        fee.classList.add("fail");
        fee.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e5").innerText = "";
        fee.classList.add("ok");
        fee.classList.remove("fail");
    }

    // MOBILE NUMBER
    if (number.value.length < 11) {
        document.getElementById("e6").innerText = "Please enter 11 digit mobile number";
        number.classList.add("fail");
        number.classList.remove("ok");
        valid = false;
    } else {
        document.getElementById("e6").innerText = "";
        number.classList.add("ok");
        number.classList.remove("fail");
    }

    // STOP FORM IF INVALID
    if (!valid) {
        event.preventDefault();
    }
});