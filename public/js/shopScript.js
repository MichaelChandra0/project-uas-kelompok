const classLeft = document.querySelector(".left");

const pCategory = classLeft.querySelectorAll("p");
const categori = document.querySelector(".categories");

// const tes = document.querySelector(".tes");
// console.log(tes);

const sectionTitle = document.querySelector(".section-title");
pCategory.forEach((result) => {
    result.addEventListener("click", function (e) {
        sectionTitle.innerHTML = e.target.textContent;

        data(e.target.textContent);
    });
});

const data = (hasil) => {
    fetch("http://127.0.0.1:8000/api/categories")
        .then((respone) => respone.json())
        .then((resault) => {
            cari(resault, hasil);
        });
};

const cari = (data, hasil) => {
    const dataHasil = data.filter((hasilData) => hasilData.kategori === hasil);
    let tampilan = "";
    if (dataHasil.length > 0) {
        dataHasil.forEach((resault) => {
            tampilan += ` <div class="box">
            <img src="/storage/${resault.gambar}" alt="">
            <p>${resault.nama}</p>
            <p>${resault.harga}</p>
        
        </div>`;
            categori.innerHTML = tampilan;
        });
    } else {
        console.log("Data tidak ditemukan.");
    }
};
