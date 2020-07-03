$(window).on("load", function () {
  $(".loader-wrapper").fadeOut("slow");
});
//scroll to top
$(document).ready(function () {
  //Check to see if the window is top if not then display button
  $(window).scroll(function () {
    // Show button after 100px
    var showAfter = 100;
    if ($(this).scrollTop() > showAfter) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  //Click event to scroll to top
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

//scroll to botttom
$(document).ready(function () {
  $(".navbar a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      const hash = this.hash;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - 60,
        },
        800,
        function () {
          window.location.hash = hash;
        }
      );
    } // End if
  });
});

//resume tabs
//btns
let educ = document.querySelector("#educ");
let exp = document.querySelector("#exp");
let project = document.querySelector("#project");

//all
let tabContent = document.querySelectorAll(".tabContent");
let buttons = document.querySelectorAll(".tab button");
//parent tabs

educ.addEventListener("click", () => {
  showPanel(0);
});

exp.addEventListener("click", () => {
  showPanel(1);
});
project.addEventListener("click", () => {
  showPanel(2);
});

//tabs function
function showPanel(panelIndex) {
  tabContent.forEach(function (node) {
    node.style.display = "none";
  });
  buttons.forEach(function (b) {
    b.style.backgroundColor = "";
  });

  tabContent[panelIndex].style.display = "block";
  buttons[panelIndex].style.backgroundColor = "#ff8c00";
}

showPanel(0);

//carousel interval
$(".carousel").carousel({
  interval: 3000,
});

///animations
const headings = document.querySelectorAll(".head");
const aboutContent = document.querySelector(".aboutContent");
const slideIn = document.querySelector(".slide-in");

const appearOptions = {
  root: null,
  threshold: 0,
  margin: "0px",
};

const appearOnscroll = new IntersectionObserver(function (
  entries,
  appearOnscroll
) {
  entries.forEach((entry) => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add("appear");
    } else {
      entry.target.classList.remove("appear");
    }
  });
},
appearOptions);

appearOnscroll.observe(slideIn);

const observer = new IntersectionObserver(function (entries) {
  entries.forEach((entry) => {
    if (entry.intersectionRatio > 0) {
      entry.target.style.animation = `anim1 1s forwards ease-out`;
    } else {
      entry.target.style.animation = "none";
    }
  });
});

headings.forEach((heading) => {
  observer.observe(heading);
});

//about content

const observerContent = new IntersectionObserver(function (entries) {
  entries.forEach((entry) => {
    if (entry.intersectionRatio > 0) {
      entry.target.style.animation = `anim2 2s forwards ease-out`;
    } else {
      entry.target.style.animation = "none";
    }
  });
});

observerContent.observe(aboutContent);

//end of animations

//form validation
let name = document.querySelector("#name");
let email = document.querySelector("#email");
let subject = document.querySelector("#subject");
let contactForm = document.querySelector("#contactForm");

// Defining a function to display error message
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

contactForm.addEventListener("submit", function (e) {
  // e.preventDefault();
  validateForm();
});

//function validate form
function validateForm() {
  let namErr = (emailErr = subErr = messagErr = true);
  //name
  if (name.value === "") {
    printError("namErr", "This field is required!");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name.value) === false) {
      printError("namErr", "Please enter a valid name");
    } else {
      printError("namErr", "");
      nameErr = false;
    }
  }
  //email

  if (email.value === "") {
    printError("emailErr", "This field is required!");
  } else {
    printError("emailErr", "");
    emailErr = false;
  }

  //subject
  if (subject.value === "") {
    printError("subErr", "This field is required!");
  } else {
    printError("subErr", "");
    subErr = false;
  }
  //message
  if (message.value === "") {
    printError("messagErr", "This field is required!");
  } else {
    printError("messagErr", "");
    messagErr = false;
  }

  if ((namErr || emailErr || subErr || messagErr) === true) {
    return false;
    window.history.back();
  } else {
    return true;
    window.history.back();
  }
  //end of validate function
}
