document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // Simulate form submission here
    const errorDiv = document.getElementById('error');
    const successDiv = document.getElementById('success');

    // Logic to determine if the message should send or fail
    if (Math.random() > 0.5) { // Random success or failure
        successDiv.style.display = 'block';
        errorDiv.style.display = 'none';
    } else {
        successDiv.style.display = 'none';
        errorDiv.style.display = 'block';
    }
});
