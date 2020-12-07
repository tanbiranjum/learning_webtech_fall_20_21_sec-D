"use strict"

const input = document.getElementById('input');
const errText = document.getElementById('error');

function validation() {
    let errorString = '';
    const inputText = input.value;
    if(inputText.length === 0) {
        errorString += 'Invalid Text.</br>';
    }
    if(inputText.split(" ").length < 2) {
        errorString += 'Required Atleast two word.</br>';
    }
    if(filter(input.value) === false) {
        errorString += 'Invalid String  </br>';
    }
    if(isLetter(inputText.charAt(0))) {
        errorString += 'First letter is not character.</br>';
    }
    errText.innerHTML = errorString;
}

function filter(text) {
    let flag = true;
    const string = text.split(" ").join("").split("");
    string.forEach((char)=> {
        if(!(char.charCodeAt(0) >= 65 && char.charCodeAt(0) <= 90) && !(char.charCodeAt(0) >= 97 && char.charCodeAt(0) <= 122)) {
            flag = false;
        }
    })
    return flag;
}

function isLetter(c) {
  return c.toLowerCase() != c.toUpperCase();
}