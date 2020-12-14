"use strict";

const currentPwd = document.getElementById("pwd1").value;
const newPwd = document.getElementById("pwd2").value;
const confirmPwd = document.getElementById("pwd3").value;

function changePassword() {
  const request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (ajaxRequest.readyState == 4) {
      str = `?currentPwd=${currentPwd}&newPwd=${newPwd}&confirmPwd=${confirmPwd}`;
      request.open("GET", `changePwd.php${str}`, true);
      request.send(null);
    }
  };
}

changePassword();
