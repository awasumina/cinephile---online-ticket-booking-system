function validate(){
    
const name = document.getElementById('name');
var password = document.getElementById('pw');
const cpassword = document.getElementById("cpw");
const number  = document.getElementById("no");
// const zip  = document.getElementById("zip");
// const country  = document.getElementById("country");

// const errorElement = document.getElementById('error');
var phoneno = /^\d{10}$/;
const email = document.getElementById("email");
var text  = document.getElementById("demo");
const form = document.getElementById('form');
var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

form.addEventListener('submit', (e) => {
  
    // let messages = [];

     e.preventDefault(); // form afai submit huna bata prevent garxa

    // if (name.value === '' || name.value == null){
    //     alert("Please provide your name!");
    //     document.getElementById('name').focus();
    // }
    alert("WELCOME");
    if (password.value.length <= 4){
        alert("Password must be longer than 4 characters");
        document.getElementById('pw').focus();
    }

  
    // if (cpassword.value.length <= 4){
    //     alert("Password must be longer than 4 characters");
    //     document.getElementById('pw').focus();
    // }

    // if (zip.value == " "  || isNaN(zip.value) || zip.value.length != 4){
    //     alert("Please provide zip in the format #### number");
    //     document.getElementById('zip').focus();
    // }

    // if (country.value == "-1" ) {
    //     alert("Select valid country!!!");
    //     document.getElementById('country').focus();

    // }

    // if(number.value.match(phoneno)) {
    //     return true;
    // }

    // else{
    //     alert("invalid format of phone number");
    //     document.getElementById("no").focus();
    // }
    
    // else{
    //     document.getElementById("demo").innerHTML = "Your form has been submited."
    // }
    // if (isNaN(number) || number.value.length < 9 || number.value.length > 9){
    //     messages.push("Contact must be 10 digit");
    // }

    // if (messages.length > 0){
    //     e.preventDefault();
    //     document.getElementById('error').innerHTML = messages;
    // }
          
    // if (email.value.match(pattern)) {
    //     form.classList.add("valid");
    //     form.classList.remove("invalid");
    //     text.innerHTML = "Your Email Address is Valid!!"
    //     text.style.color = "#00ff00";
    // }

    // else {
    //     form.classList.remove("valid");
    //     form.classList.add("invalid");
    //     text.innerHTML ="Please Enter Valid Email Address";
    //     text.style.color ="#ff0000";
    // }

    // if (email.value == "") {
    //     form.classList.remove("valid");
    //     form.classList.remove("invalid");
    //     text.innerHTML = ""
    //     text.style.color = "#00ff00";
    // }
 
}) 

}

     