document.getElementById('Sname').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submit action
        document.getElementById('Semail').focus(); // Move focus to the next field 
        event.preventDefault();
        document.getElementById('button').focus(); 
    }
});