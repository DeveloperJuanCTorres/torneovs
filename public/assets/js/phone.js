//https://www.jqueryscript.net/form/jQuery-International-Telephone-Input-With-Flags-Dial-Codes.html

//https://www.twilio.com/blog/international-phone-number-input-html-javascript

function getIp(callback) {
  fetch('ipinfo.io/140.82.183.34?token=66e2f39b20a2bd', { headers: { 'Accept': 'application/json' }})
    .then((resp) => resp.json())
    .catch(() => {
      return {
        country: 'us',
      };
    })
    .then((resp) => callback(resp.country));
 }
 
  const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
 
 const info = document.querySelector(".alert-info");
 
 function process(event) {
  event.preventDefault();
 
  const phoneNumber = phoneInput.getNumber();
 
  info.style.display = "";
  info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
 }