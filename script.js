

const button = document.getElementById("themeButton");

button.onclick = function(){

    document.body.classList.toggle("dark-mode");

}
const form = document.getElementById("contactForm");

form.addEventListener("submit", function(event){

    const name = document.getElementById("name").value;

    const email = document.getElementById("email").value;

    const message = document.getElementById("message").value;

    if(name === "" || email === "" || message === ""){

        alert("Please fill all fields!");

        event.preventDefault();

    }

});
const loadButton = document.getElementById("loadProjects");

loadButton.addEventListener("click", function(){

    fetch("fetch_projects.php")

    .then(response => response.text())

    .then(data => {

        document.querySelector(".project-container").innerHTML = data;

    });

});
const text = "Hello, I'm Ufuk";

let index = 0;

function typeEffect(){

    if(index < text.length){

        document.getElementById("typing-text").innerHTML += text.charAt(index);

        index++;

        setTimeout(typeEffect, 100);

    }

}

typeEffect();
const hiddenElements = document.querySelectorAll(".hidden");

const observer = new IntersectionObserver((entries) => {

    entries.forEach((entry) => {

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

});

hiddenElements.forEach((el) => observer.observe(el));