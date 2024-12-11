  // Smooth scrolling for navigation links
  $('a').on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800);
    }
});

// Basic form validation using JavaScript
document.getElementById('contactForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === "" || email === "" || message === "") {
        alert("All fields must be filled out.");
        event.preventDefault();
    } else {
        alert("Your message has been sent successfully!");
    }
});