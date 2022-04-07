function validateForm() {
    let username = document.forms["loginForm"]["username"].value;
    let password = document.forms["loginForm"]["password"].value;
    if (username == "" && password == "") {
      alert("Username and Password must be filled out");
      return false;
    }else if (username == "") {
        alert("Username must be filled out");
        return false;
    } else if (password == "") {
        alert("Password must be filled out");
        return false;
    }
}