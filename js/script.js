// Scroll Animation
AOS.init();


// new TypeIt('#school_name', {
//     speed: 50,
//     cursor: false,
//     waitUntilVisible: true,
// }).go();
// new TypeIt('#typing_anim', {
//     speed: 20,
//     cursor: false,
//     waitUntilVisible: true,
// }).go();;


function changePrincipalDetailsToPrimary() {
    var principal_title = document.getElementById("principal_title");
    var principal_name = document.getElementById("principal_name");
    var principal_image = document.getElementById("principal_image");
    principal_title.innerHTML = "The Principal";
    principal_name.innerHTML = "Mr. Blah Blaah Blaaah"
    principal_image.src = '../img/principal2.jpg';

}

function changePrincipalDetailsToSecondary() {
    var principal_title = document.getElementById("principal_title");
    var principal_name = document.getElementById("principal_name");
    var principal_image = document.getElementById("principal_image");
    principal_title.innerHTML = "The Principal";
    principal_name.innerHTML = "Mr. M.H.Wijerathna"
    principal_image.src = '../img/principal1.jpg';

}

function feedbackData() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var message = document.getElementById("message");

    var formData = new FormData();
    formData.append("name", name.value);
    formData.append("email", email.value);
    formData.append("message", message.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            var text = request.responseText;
            alert(text);
        }
    }
    request.open("POST", "PHPMailer/sendMail.php", true);
    request.send(formData);
}