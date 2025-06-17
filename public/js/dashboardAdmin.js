const containerAdmin = document.querySelector(".containerAdmin");
const sectionTitle = document.querySelector(".section-title");
const categories = document.querySelector(".categories");
const left = document.querySelector(".left");
const p = left.querySelectorAll("p");

p.forEach((resault) => {
    resault.addEventListener("click", function (e) {
        const hasil = e.target.textContent;
        sectionTitle.innerHTML = hasil;

        if (sectionTitle.textContent == "Create Menu") {
            categories.style.display = "none";
            containerAdmin.style.display = "block";
        } else if (sectionTitle.textContent == "Edit / Delete") {
            categories.style.display = "flex";
            containerAdmin.style.display = "none";
        }
    });
});
