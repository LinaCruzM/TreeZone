'use strict';
function VerC() {
    var y = document.getElementById("Contra");
    if (y.type === "password") {
      y.type = "text";
    } else {
      y.type = "password";
    }
  }