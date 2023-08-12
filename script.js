let upload = document.querySelector(".upload");
let input = document.querySelector("form input");
let submit = document.querySelector("form button");
let previewImg = document.querySelector(".preview img");

function uploadActive() {
  input.value = "";
  input.click();
}

input.onchange = () => {
  let src = URL.createObjectURL(input.files[0]);
  previewImg.src = src;
  upload.classList.add("active");
};

function submitClick() {
  submit.click();
}

function removeActive() {
  upload.classList.remove("active");
  input.value = "";
}
