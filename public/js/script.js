// Hide navbar on scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    } else {
    document.getElementById("navbar").style.top = "-70px";
    }
    prevScrollpos = currentScrollPos;
}


// Backgound dark on scroll
var nav = document.querySelector('nav');
window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-nav');
    }else {
        nav.classList.remove('bg-nav');
    }
})


// Button dark mode
const toggle = document.getElementById('toggle');
const body = document.body;
const toggleDark = localStorage.getItem("style");
const darkTheme = localStorage.getItem("style");

if (toggleDark) toggle.classList.add("active-dm");
if (darkTheme) body.classList.add("dark-theme");

toggle.onclick = e => {
    e.preventDefault();
    if (!body.classList.contains("dark-theme")) {
        toggle.classList.add("active-dm");
        body.classList.add("dark-theme");
        localStorage.setItem("style", true);
    } else {
        toggle.classList.remove("active-dm");
        body.classList.remove("dark-theme");
        localStorage.removeItem("style");
    }
};


// Navbar bottom mobile
if (window.innerWidth < 600) {
    $('#body-port').removeAttr('data-bs-target').attr('data-bs-target', '#navbar-bottom');
}


// Button To Top
window.addEventListener('scroll', function(){
    var scroll = this.document.querySelector('#button-top button');
    scroll.classList.toggle("active-btnt", window.scrollY > 400)
})


// Progress circular chart
// Circle 1
let number = document.getElementById("number");
let counter = 0; 
setInterval(() => {
    if(counter == 80){
        clearInterval();
    }else{
        counter += 1;
        number.innerHTML = counter + "%";
    }
}, 24 );
// Circle 2
let number2 = document.getElementById("number2");
let counter2 = 0; 
setInterval(() => {
    if(counter2 == 75){
        clearInterval();
    }else{
        counter2 += 1;
        number2.innerHTML = counter2 + "%";
    }
}, 27 );
// Circle 3
let number3 = document.getElementById("number3");
let counter3 = 0; 
setInterval(() => {
    if(counter3 == 40){
        clearInterval();
    }else{
        counter3 += 1;
        number3.innerHTML = counter3 + "%";
    }
}, 50 );


// Send Email from contact form
$("#contact-form").on("submit", function (event) {
    event.preventDefault();

    var formData = new FormData(this);
    formData.append("service_id", "service_m5805es");
    formData.append("template_id", "template_158tmje");
    formData.append("user_id", "sUVAE5ULsYs5AWTtR");

    let name = $("#name");
    let email = $("#email");
    let message = $("#message");

    if (!name.val() || !email.val() || !message.val()) {
        Swal.fire({
            icon: 'error',
            text: 'Data cannot be empty!',
        })
    } else {
        $.ajax("https://api.emailjs.com/api/v1.0/email/send-form", {
            type: "POST",
            data: formData,
            contentType: false,
            processData: false, 
        })

        .done(function () {
            Swal.fire('Successfully sent message');
            name.val('');
            email.val('');
            message.val('');
        })
        .fail(function (error) {
            Swal.fire({
                icon: 'error',
                text: 'Failed to send message!',
            })
        });
    }
});


// Modal image
var modal = document.querySelector(".modal");
var modalImg = document.querySelector(".modal-content");

Array.from(document.querySelectorAll(".myImg")).forEach(item => {
    if (window.innerWidth > 600) {
        item.addEventListener("click", event => {
        modal.style.display = "block";
        modalImg.src = event.target.src;
        });
    }
});

// When the user clicks image or modal, close the modal
document.querySelector(".close").addEventListener("click", () => {
    modal.style.display = "none";
});






















// function send(event) {
//     event.preventDefault();
//     Email.send({
//         Name : document.getElementById('name-contact').value,
//         Host : "smtp.gmail.com",
//         Username : "richalzackyi@gmail.com",
//         Password : "password",
//         To : 'richalzackyi@gmail.com',
//         From : document.getElementById('email-contact').value,
//         Subject : "Message from visitors Rz Portfolio",
//         Body : document.getElementById('message-contact').value
//     }).then(function(response){
//         if (response == "OK") {
//             alert("Mail sent succsessfully");
//         }else{
//             throw new Error("Error : " + response.statusText);
//         }
//     });
// }











// const form = document.querySelector('.contact_form');

// function sendMsg(e){
//     e.preventDefault();
//         const name = document.querySelector('.name-contact'),
//         email = document.querySelector('.email-contact'),
//         msg = document.querySelector('.message-contact');

//     Email.send({
//         SecureToken : " f3185801-c155-452f-933e-5a0170b1ed1a",
//         To : 'richalzackyi@gmail.com',
//         From : email.value,
//         Subject : "Contact message from visitors Rz Portfolio",
//         Body : msg.value
//     }).then(
//         message => alert(message)
//     );
// }

// form.addEventListener('submit', sendMsg);











// function sendEmail(){
//     Email.send({
//         SecureToken : "822fce88-58f3-4932-9f7c-716625ffc431",
//         To : 'richalzackyi@gmail.com',
//         From : document.getElementById("email-contact").value,
//         Subject : "Message from Visitors Rz Portfolio",
//         Body : "Name : " + document.getElementById("name-contact").value
//                 + "<br> Email : " + document.getElementById("email-contact").value
//                 + "<br> Message : " + document.getElementById("message-contact").value
//     }).then(
//       message => alert("Message Sent Success !!")
//     );
// }