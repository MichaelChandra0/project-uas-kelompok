const classLeft = document.querySelector(".left");

const pCategory = classLeft.querySelectorAll("p");

// const tes = document.querySelector(".tes");
// console.log(tes);

const sectionTitle = document.querySelector(".section-title");

pCategory.forEach((result) => {
    result.addEventListener("click", function (e) {
        sectionTitle.innerHTML = e.target.textContent;
    });
});
