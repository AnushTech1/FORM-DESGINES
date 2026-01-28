document.getElementById('email').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submit action
        document.getElementById('button').focus();    // Move focus to the next field 
    }
});
