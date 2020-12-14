"use strict";

const inputName = document.getElementById("input");
const email = document.getElementById("email").value;
const errText = document.getElementById("error");

function validationName() {
  let errorString = "";
  const inputText = inputName.value;
  if (inputText.length === 0) {
    errorString += "Invalid Text.</br>";
  }
  if (inputText.split(" ").length < 2) {
    errorString += "Required Atleast two word.</br>";
  }
  if (filterName(inputText) === false) {
    errorString += "Invalid String  </br>";
  }
  if (isLetter(inputText.charAt(0)) === false) {
    errorString += "First letter is not character.</br>";
  }
  errText.innerHTML = errorString;
}

function filterName(text) {
  let flag = true;
  const string = text.split(" ").join("").split("");
  string.forEach((char) => {
    if (
      !(char.charCodeAt(0) >= 65 && char.charCodeAt(0) <= 90) &&
      !(char.charCodeAt(0) >= 97 && char.charCodeAt(0) <= 122)
    ) {
      flag = false;
    }
  });
  return flag;
}

function isLetter(c) {
  return c.toLowerCase() != c.toUpperCase();
}

function ValidateEmail() {
  errText.innerHTML = "";
  if (!IsValidEmail(email)) {
    errText.innerHTML = "Invalid email address.";
  }
}

function IsValidEmail(email) {
  if (email.length <= 2) {
    return false;
  }
  if (email.indexOf("@") == -1) {
    return false;
  }

  var parts = email.split("@");
  var dot = parts[1].indexOf(".");
  var len = parts[1].length;
  var dotSplits = parts[1].split(".");
  var dotCount = dotSplits.length - 1;

  //Check whether Dot is present, and that too minimum 1 character after @.
  if (dot == -1 || dot < 2 || dotCount > 2) {
    return false;
  }

  //Check whether Dot is not the last character and dots are not repeated.
  for (var i = 0; i < dotSplits.length; i++) {
    if (dotSplits[i].length == 0) {
      return false;
    }
  }

  return true;
}
