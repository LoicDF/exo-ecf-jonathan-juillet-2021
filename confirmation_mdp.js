

function checkEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validate(event) {
    event.preventDefault();
    var email = document.getElementById("email").value;
    var email2 = document.getElementById("email2").value;
    var message = document.getElementById("message").value;
    var bienEnvoye = document.getElementById("bienEnvoye").value;

    if (checkEmail(email)) {
        // alert('Adresse e-mail valide');
    } else {
        alert('Adresse e-mail non valide');
        document.getElementById("email").style.border = "2px solid red";
        return false;
    }
    if (email === email2 ) {
        // alert('Adresses e-mail identiques ');
        
    } else {
        // email2.setAttribute("style","font-style : italic; border:1px solid red");
        document.getElementById("email2").style.border = "2px solid red";
        alert('Adresses e-mail differentes');
        return false;
    }
    if (message.length > 0) {
        // alert('le message est ok');
        
    } else {
        alert('veuillez entrez un message');
        document.getElementById("message").style.border = "2px solid red";
        return false;

    }
    if((email === email2) && message.length > 0){
        // alert('le message est bien envoyé');
        document.getElementById("bienEnvoye").style.display = "block";
        document.getElementById("bienEnvoye").style.color = "green";
        // document.getElementById("bienEnvoye").style.border = "2px solid green";
        // setTimeout(alert, 2000,"merci c'est bien envoyé");
        // setTimeout(function(){window.location.href="index.html", 5000} );
    }
    fetch("index.php", { //Et si il est valide alors du fait une requete ajax
        method: "POST", // En post
        body: new FormData(document.querySelector('form')) //Avec le formulaire
    })
        .then(result =>
             result.json())
        .then(data => {
            // flashMessage(data.status)
            console.log(data.status)

        });
        
}   


// let b1 = document.getElementById('bienEnvoye');

// b1.addEventListener('click', message);
// function message(){
//     setTimeout(alert, 2000, 'Message d\'alerte après 2 secondes'); 
// }