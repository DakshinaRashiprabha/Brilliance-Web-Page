/*function validate() {
    var name = document.getElementById("username").value;
    var Pass = document.getElementById("password").value;
    
    if (name == 'Admin' && Pass == 'user123') {
        alert("Login Successfully")
        window.location.assign("Final.html")
    } else {
        alert("Login Failed")
    }
    
}
*/



function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === 'Admin' && password === 'user123') {
        alert("Login Successful");
        window.location.assign("http://localhost/Brilliance/contact/Dashboard/Final.html");
    } else {
        alert("Incorrect username or password");
    }
}

