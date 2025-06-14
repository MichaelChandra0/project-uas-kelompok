const classLeft = document.querySelector(".left");

const pCategory = classLeft.querySelectorAll("p");

const categori = document.querySelector(".categories");

const sectionTitle = document.querySelector(".section-title");

pCategory.forEach((result) => {
    result.addEventListener("click", function (e) {
        sectionTitle.textContent = e.target.textContent;

        data(e.target.textContent);
    });
});

document.addEventListener("DOMContentLoaded", () => {
    sectionTitle.textContent = "Pizza";
    data("Pizza");
});

// fetch data
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
            const hargaRupiah = Number(resault.harga).toLocaleString("id-ID");

            tampilan += ` 
                <div class="box">
                    <img src="/storage/${resault.gambar}" alt=""> 
                    <p>${resault.nama}</p>
                    <p>Rp ${hargaRupiah}</p> 
                </div>`;
        });
        categori.innerHTML = tampilan;
    } else {
        console.log("Data tidak ditemukan.");
    }
};
