function redirectToPayment() {
  // Get the form element
  var form = document.getElementById("booking-form");

  // Redirect to Payment.html after submitting the form
  form.addEventListener("submit", function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Redirect to Payment.html
    window.location.href = "Payment.html";
  });
}
