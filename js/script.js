// Scroll Animation
AOS.init();


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