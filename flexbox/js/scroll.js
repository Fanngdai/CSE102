document.getElementById('pets-link').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('pets-section').scrollIntoView({
        behavior: "auto", 
        block: "center", 
        inline: "nearest"
    });
 }); 