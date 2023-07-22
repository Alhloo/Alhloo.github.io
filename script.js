let questions = [
  {
    question: "",
    a: "",
    b: "",
    c: "",
    d: "",
    ans: "",
  },
];

function showPassword(bx) {
  bx.classList.toggle("bx-show");
  bx.classList.toggle("bx-hide");
  let passwordInput = document.querySelector(".password input");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}
