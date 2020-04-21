/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateUserForm()
{
    var uname =  document.forms[formName]["username"].value;
    if (uname.length > 50) {
        alert("Username value invalid; Must be 50 or less characters");
        return false;
    }
    var pword = document.forms[formName]["password"].value;
    if (pword.length > 15) {
        alert("Password value invalid; Must be 15 or less characters");
        return false;
    }
    //Password Validation code adapted from w3schools.com
    var lowerCaseLetters = /[a-z]/g;
    if(!pword.value.match(lowerCaseLetters)) {  
        alert("Password value invalid; Must contain at least 1 lowercase letter");
        return false;
    } 
  
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(!pword.value.match(upperCaseLetters)) {  
        alert("Password value invalid; Must contain at least 1 uppercase letter");
        return false;
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(!pword.value.match(numbers)) {
        alert("Password value invalid; Must contain at least 1 number");
        return false;
    } 
    
    // Validate symbols
    var symbols = /!@#%/g;
    if(!pword.value.match(symbols)) {
        alert("Password value invalid; Must contain at least 1 symbol (!@#%)");
        return false;
    }
     
    var pword2 = document.forms[formName]["password2"].value;
    if (pword !== pword2) {
        alert("Password value invalid; Values do not match");
        return false;
    }

    var email = document.forms[formName]["email"].value;
    if (email.length > 50 || !email.inculdes("@")) {
        alert("Email value invalid");
        return false;
    }
    
    return true;
}

