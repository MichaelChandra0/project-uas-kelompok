const box = document.querySelector(".box");
const popUp = document.querySelector(".popup");
const close = document
    .querySelector(".close")
    .addEventListener("click", function (e) {
        popUp.style.display = "none";
    });

const btnEdit = box
    .querySelector(".edit")
    .addEventListener("click", function (e) {
        popUp.style.display = "block";
    });

//fungsi side bar

const left = document.querySelector(".left");
const sectionTitle = document.querySelector(".section-title");
const p = left.querySelectorAll("p");

const categories = document.querySelector(".categories");
const containerAdmin = document.querySelector(".containerAdmin");

const sidebar = document.querySelector(".left");

p.forEach((resault) => {
    resault.addEventListener("click", function (e) {
        const hasil = e.target.textContent;
        sectionTitle.innerHTML = hasil;

        if (sectionTitle.textContent == "Create Menu") {
            categories.style.display = "block";
            containerAdmin.style.display = "none";
        } else if (sectionTitle.textContent == "Edit / Delete") {
            categories.style.display = "none";
            containerAdmin.style.display = "block";
        }
    });
});
