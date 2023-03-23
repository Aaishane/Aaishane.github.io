/*Login and registration form*/
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

  function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
    }

  function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";
    }

    

/*Validation for registration form*/
const fregister = document.getElementById("register");
const userid = document.getElementById("userid");
const email = document.getElementById("email");
const password1 = document.getElementById("password1");
const password2 = document.getElementById("password2");

fregister.addEventListener("submit", (e) => {
e.preventDefault();
checkInputRegister();
inputCorrectRegister();
});

  function checkInputRegister() {
    const useridValue = userid.value.trim();
    const emailValue = email.value.trim();
    
    const password1Value = password1.value.trim();
    const password2Value = password2.value.trim();

    if(true){
      /*USER ID*/
    if (useridValue === "") {
      setError(userid, "User ID Cannot Be Blank");
      return(false);
    } 
    else if(useridValue.length<4 && useridValue.length<11) {
      setError(userid, "User ID should be in the range of 5 to 11 characters");
      return(false);
    }
    else{
      setSuccess(userid);
    }
  
    /*Email*/
    if (emailValue === "") {
      setError(email, "Email Cannot Be Blank");
      return(false);
    } 
    else {
      setSuccess(email);
    }
  
    /*Password*/
    if (password1Value === "") {
      setError(password1, "Password Cannot Be Blank");
      return(false);
    } 
    else if (password1Value.length<4) {
      setError(password1, "Password Cannot be less than 5 characters");
      return(false);
    }
    else {
      setSuccess(password1);
    }
  
    if (password2Value === "") {
      setError(password2, "Password Cannot Be Blank");
      return(false);
    }
    else if (password1Value !== password2Value) {
      setError(password2, "Password Does not match");
      return(false);
    } 
    else {
      setSuccess(password2);
      return(true);
    }
    }
  }

/*Validation for registration form*/
const flogin = document.getElementById("login");
const useridl = document.getElementById("useridl");
const passwordl = document.getElementById("passwordl");

flogin.addEventListener("submit", (e) => {
e.preventDefault();
checkInputLogin();
inputCorrectLogin();
});

  function checkInputLogin(){
    const useridlValue = useridl.value.trim();
    const passwordlValue = passwordl.value.trim();
    
    if(true){
      if (useridlValue === "") {
        setError(useridl, "User ID Cannot Be Blank");
        return(false);
      } 
      else{
        setSuccess(useridl);
      }

      if (passwordlValue === "") {
        setError(passwordl, "Password Cannot Be Blank");
        return(false);
      } 
      else {
        setSuccess(passwordl);
        return(true);
      }
    }
  }
        
  function inputCorrectRegister(){
    if (checkInputRegister() == true){
      document.registerForm.submit();
    }    
  }

  function inputCorrectLogin(){
    if (checkInputLogin() == true){
      document.loginForm.submit();
    }    
  }
        
      
  function setError(input, message) {
    const inputField = input.parentElement;
    const small = inputField.querySelector("small");
    inputField.className = "input-field error";
    small.innerText = message;
  }

  function setSuccess(input) {
    const inputField = input.parentElement;
    inputField.className = "input-field success";
  }

      