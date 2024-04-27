

let spinnerEl = document.getElementById("spinnerId");
let paymentSucccessEl = document.getElementById("paymentSuccessId");

let spinTime = setTimeout(function(){
    spinnerEl.classList.add("d-none");
    paymentSucccessEl.classList.remove("d-none");
}, 2000);