class Auth {
    
    constructor() {
        
        if ("Authuser" in localStorage) {
            const auth = localStorage.getItem("auth");
            const user = JSON.parse(localStorage.getItem("Authuser"));
            this.validateAuth(auth, user);
        }else{
            console.error('Fail to set Cookie on Authentication..!');
        }
    }
    validateAuth(auth, user) {
        if (user !="") {
            $('#username').val(user.email);
            $('#password').val(user.password);
            let rememberMeCheck = document.querySelector('#rememberMe').checked= true
        }else{
            $('#username').val('');
            $('#password').val('');
            let rememberMeCheck = document.querySelector('#rememberMe').checked= false;
        }
        
       
    }

    logOut() {
        localStorage.removeItem("user");
        localStorage.removeItem("Authuser");
        window.location.replace("/")
    }
}