const form = document.querySelector(".fullPage form"),
  fullUrl = document.querySelector("input"),
  shortenerBtn = document.querySelector("button"),
  popupButton = document.querySelector(".myPopup");

form.onsubmit = (e) => {
  e.preventDefault(); // prevent form from submitting
};

shortenerBtn.onclick = () => {
  //ajax
  let xhr = new XMLHttpRequest(); //Creating xhr Object
  xhr.open("POST", "php/url-config.php", true);
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // if ajax request status is ok/success
      let data = xhr.response;
      if (data.length <= 5) {
        popupButton;
      } else {
        alert(data);
      }
    }
  };
  //send form data to php file
  let formData = new FormData(form); // creating new formData() object
  xhr.send(formData);
};
