//var randomDebateButton=document.getElementById("random-debate-button");

/* code for the functionality/structure of the random debate section */
$("#random-debate-button").one("click", function (e) {
    var main = event.target.parentNode.parentNode;
    var radioDiv1 = document.createElement("DIV");
    var radioDiv2 = document.createElement("DIV");
    radioDiv1.innerHTML =
        "<div class='pretty p-switch p-fill' id='debaterRadio'>\
              <input type='radio' name='random'/>\
              <div class='state'>\
                  <label>As a Debater</label>\
              </div>\
          </div>";

    radioDiv2.innerHTML = "<div class='pretty p-switch p-fill' id='spectatorRadio'> \
          <input type='radio' name='random'/> \
          <div class='state'> \
              <label>As a Spectator</label> \
          </div> \
      </div>";
    var ul = document.createElement("UL");
    var l1 = document.createElement("LI");
    var l2 = document.createElement("LI");
    l1.appendChild(radioDiv1);
    l2.appendChild(radioDiv2);
    ul.appendChild(l1);
    ul.appendChild(l2);
    ul.id = "userType";
    main.appendChild(ul);
    $("#random-debate-button").text("ENTER NOW");
});


//var createDebateButton=document.getElementById("create-debate-button");

/* code for the functionality/structure of the create debate section */
$("#create-debate-button").one("click", function (e) {
    var main = event.target.parentNode.parentNode.parentNode;
    var radioDiv1 = document.createElement("DIV");
    var radioDiv2 = document.createElement("DIV");
    radioDiv1.innerHTML =
        "<div class='pretty p-switch p-fill' id='debaterRadio'>\
              <input type='radio' name='create' />\
              <div class='state'>\
                  <label>As a Debater</label>\
              </div>\
          </div>";


    radioDiv2.innerHTML = "<div class='pretty p-switch p-fill' id='audienceRadio'> \
          <input type='radio' name='create'/> \
          <div class='state'> \
              <label>As a Spectator</label> \
          </div> \
      </div>";
    var ul = document.createElement("UL");
    var l1 = document.createElement("LI");
    var l2 = document.createElement("LI");
    l1.appendChild(radioDiv1);
    l2.appendChild(radioDiv2);
    ul.appendChild(l1);
    ul.appendChild(l2);
    ul.id = "userType";
    main.appendChild(ul);
    var newTopic = $("#create-topic-input").val();
    $("#create-debate-button").text("Participate in \"" + newTopic + "\"");
    $("#create-topic-input").remove();
});

// email and password validation listeners
var emailField = document.getElementById("email");
emailField.addEventListener('blur', function () {
    validateEmail(this);
});
var passwordField = document.getElementById("password");
passwordField.addEventListener('blur', function () {
    validatePassword(this);
});

// validation functions
function validateEmail(input) {
    var email_error_message_field = document.getElementById('email_error_message');

    /*got this regex from http://emailregex.com */
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    email_error_message_field.innerHTML = regex.test(input.value) ? "" : "Please enter a valid email.";
}

function validatePassword(input) {
    var password_error_message_field = document.getElementById('password_error_message');

    /* want the password to be at least 8 characters */
    var regex = /^.{8,}$/;

    password_error_message_field.innerHTML = regex.test(input.value) ? "" : "The password must be at least 8 characters ";
}

