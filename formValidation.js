function contactForm() {
    let name = document.forms["contactForm"]["name"].value;
    let surname = document.forms["contactForm"]["surname"].value;
    let email = document.forms["contactForm"]["email"].value;
    if (name == "" && surname == "" && email) {
      alert("Username and Password, Email must be filled out");
      return false;
    }else if (name == "") {
        alert("Name must be filled out");
        return false;
    } else if (surname == "") {
        alert("Surname must be filled out");
        return false;
    } else if (email == "") {
        alert("Email must be filled out");
        return false;
    }
} 