// =====================================
// WANTO Wash
// pelanggan.js
// =====================================

let pelanggan = JSON.parse(localStorage.getItem("pelanggan")) || [];

// =============================
// Simpan Pelanggan
// =============================

function tambahPelanggan() {

    let nama = document.getElementById("nama").value.trim();
    let hp = document.getElementById("hp").value.trim();
    let plat = document.getElementById("plat").value.toUpperCase().trim();
    let motor = document.getElementById("motor").value;

    if (nama == "" || hp == "" || plat == "") {

        alert("Lengkapi data terlebih dahulu!");

        return;

    }

    pelanggan.push({

        nama: nama,
        hp: hp,
        plat: plat,
        motor: motor

    });

    localStorage.setItem("pelanggan", JSON.stringify(pelanggan));

    document.getElementById("nama").value = "";
    document.getElementById("hp").value = "";
    document.getElementById("plat").value = "";

    tampilPelanggan();

}

// =============================
// Tampilkan Data
// =============================

function tampilPelanggan() {

    let tbody = document.querySelector("#tabel tbody");

    if (!tbody) return;

    tbody.innerHTML = "";

    pelanggan.forEach(function(item, index) {

        tbody.innerHTML += `

<tr>

<td>${index + 1}</td>

<td>${item.nama}</td>

<td>${item.hp}</td>

<td>${item.plat}</td>

<td>${item.motor}</td>

<td>

<button onclick="editPelanggan(${index})">

✏️

</button>

<button onclick="hapusPelanggan(${index})">

🗑️

</button>

</td>

</tr>

`;

    });

}

// =============================
// Hapus
// =============================

function hapusPelanggan(index){

    if(confirm("Hapus pelanggan ini?")){

        pelanggan.splice(index,1);

        localStorage.setItem("pelanggan",JSON.stringify(pelanggan));

        tampilPelanggan();

    }

}

// =============================
// Edit
// =============================

function editPelanggan(index){

    document.getElementById("nama").value=pelanggan[index].nama;
    document.getElementById("hp").value=pelanggan[index].hp;
    document.getElementById("plat").value=pelanggan[index].plat;
    document.getElementById("motor").value=pelanggan[index].motor;

    pelanggan.splice(index,1);

    localStorage.setItem("pelanggan",JSON.stringify(pelanggan));

    tampilPelanggan();

}

// =============================
// Cari
// =============================

function cariPelanggan(){

    let keyword=document.getElementById("cari").value.toLowerCase();

    let tbody=document.querySelector("#tabel tbody");

    tbody.innerHTML="";

    pelanggan.forEach(function(item,index){

        if(

            item.nama.toLowerCase().includes(keyword) ||

            item.plat.toLowerCase().includes(keyword) ||

            item.hp.includes(keyword)

        ){

            tbody.innerHTML+=`

<tr>

<td>${index+1}</td>

<td>${item.nama}</td>

<td>${item.hp}</td>

<td>${item.plat}</td>

<td>${item.motor}</td>

<td>

<button onclick="editPelanggan(${index})">

✏️

</button>

<button onclick="hapusPelanggan(${index})">

🗑️

</button>

</td>

</tr>

`;

        }

    });

}

window.onload=function(){

    tampilPelanggan();

}
