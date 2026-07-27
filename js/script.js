/* ===================================
   WANTO Wash
   script.js
=================================== */

// ==============================
// Tanggal & Jam
// ==============================

function tampilTanggal() {

    const sekarang = new Date();

    const opsi = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    const elemen = document.getElementById("tanggal");

    if (elemen) {
        elemen.innerHTML = sekarang.toLocaleDateString("id-ID", opsi);
    }

}

// ==============================
// Nomor Transaksi Otomatis
// ==============================

function nomorTransaksi() {

    let d = new Date();

    let no = "WW" +
        d.getFullYear() +
        String(d.getMonth()+1).padStart(2,'0') +
        String(d.getDate()).padStart(2,'0') +
        String(d.getHours()).padStart(2,'0') +
        String(d.getMinutes()).padStart(2,'0') +
        String(d.getSeconds()).padStart(2,'0');

    let input = document.getElementById("no_transaksi");

    if(input){
        input.value=no;
    }

}

// ==============================
// Harga Paket
// ==============================

function hitungHarga(){

    let paket=document.getElementById("paket");

    let harga=document.getElementById("harga");

    if(paket && harga){

        harga.value=paket.value;

        hitungKembalian();

    }

}

// ==============================
// Kembalian
// ==============================

function hitungKembalian(){

    let harga=parseInt(document.getElementById("harga")?.value)||0;

    let bayar=parseInt(document.getElementById("bayar")?.value)||0;

    let kembali=document.getElementById("kembali");

    if(kembali){

        kembali.value=bayar-harga;

    }

}

// ==============================
// Preview Foto Motor
// ==============================

function previewFoto(input){

    if(input.files && input.files[0]){

        let reader=new FileReader();

        reader.onload=function(e){

            let img=document.getElementById("preview");

            if(img){

                img.src=e.target.result;

            }

        }

        reader.readAsDataURL(input.files[0]);

    }

}

// ==============================
// Format Rupiah
// ==============================

function rupiah(angka){

    return Number(angka).toLocaleString('id-ID');

}

// ==============================
// Simpan Data
// ==============================

function simpan(){

    alert("Data berhasil disimpan.");

}

// ==============================
// Hapus Data
// ==============================

function hapus(){

    if(confirm("Yakin ingin menghapus data ini?")){

        alert("Data berhasil dihapus.");

    }

}

// ==============================
// Print Nota
// ==============================

function cetak(){

    window.print();

}

// ==============================
// Cari Data
// ==============================

function cari(){

    let input=document.getElementById("cari");

    if(!input) return;

    let filter=input.value.toUpperCase();

    let table=document.getElementById("tabel");

    if(!table) return;

    let tr=table.getElementsByTagName("tr");

    for(let i=1;i<tr.length;i++){

        let td=tr[i].getElementsByTagName("td")[1];

        if(td){

            let txt=td.textContent||td.innerText;

            tr[i].style.display=txt.toUpperCase().indexOf(filter)>-1?"":"none";

        }

    }

}

// ==============================
// Reset Form
// ==============================

function resetForm(){

    document.querySelectorAll("form").forEach(form=>form.reset());

}

// ==============================
// Saat Halaman Dibuka
// ==============================

window.onload=function(){

    tampilTanggal();

    nomorTransaksi();

}
