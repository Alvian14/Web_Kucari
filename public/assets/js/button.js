// function tambah() {
//     Swal.fire({
//         title: 'Tambah Postingan',
//         html:
//             '<form id="formTambah">' +
//             '<div class="form-group">' +
//             '<label for="kategori">Kategori:</label>' +
//             '<select class="form-control" id="kategori" name="kategori">' +
//             '<option value="menemukan">Menemukan</option>' +
//             '<option value="kehilangan">Kehilangan</option>' +
//             '</select>' +
//             '</div>' +
//             '<div class="form-group">' +
//             '<label for="deskripsi">Deskripsi:</label>' +
//             '<textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>' +
//             '</div>' +
//             '<div class="form-group">' +
//             '<label for="alamat">Alamat:</label>' +
//             '<input type="text" class="form-control" id="alamat" name="alamat">' +
//             '</div>' +
//             '<div class="form-group">' +
//             '<label for="lokasi_terakhir">Lokasi Terakhir:</label>' +
//             '<input type="text" class="form-control" id="lokasi_terakhir" name="lokasi_terakhir">' +
//             '</div>' +
//             '<div class="form-row">' +
//             '<div class="form-group col-md-6">' +
//             '<label for="tanggal">Tanggal:</label>' +
//             '<input type="date" class="form-control" id="tanggal" name="tanggal">' +
//             '</div>' +
//             '<div class="form-group col-md-6">' +
//             '<label for="waktu">Waktu:</label>' +
//             '<input type="time" class="form-control" id="waktu" name="waktu">' +
//             '</div>' +
//             '</div>' +
//             '<div class="form-group">' +
//             '<label for="gambar">Gambar:</label>' +
//             '<input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" onchange="tampilkanPratinjau(this)">' +
//             '<img id="pratinjauGambar" src="#" alt="Pratinjau Gambar" style="display:none; max-width: 100%; margin-top: 10px;" />' +
//             '</div>' +
//             '</form>',
//         showCancelButton: true,
//         confirmButtonText: 'Simpan',
//         cancelButtonText: 'Batal',
//         showLoaderOnConfirm: true,
//         customClass: {
//             confirmButton: 'btn btn-success',
//             cancelButton: 'btn btn-danger'
//         },
//         preConfirm: () => {
//             const kategori = document.getElementById('kategori').value;
//             const deskripsi = document.getElementById('deskripsi').value;
//             const alamat = document.getElementById('alamat').value;
//             const lokasi_terakhir = document.getElementById('lokasi_terakhir').value;
//             const tanggal = document.getElementById('tanggal').value;
//             const waktu = document.getElementById('waktu').value;
//             const gambar = document.getElementById('gambar').files[0]; // Ambil file yang dipilih

//             // Validasi form
//             if (!kategori || !deskripsi || !alamat || !lokasi_terakhir || !tanggal || !waktu || !gambar) {
//                 Swal.showValidationMessage('Harap isi semua bidang');
//                 return false;
//             }

//             // Lakukan logika simpan jika form valid
//             // Contoh:
//             // SimpanData(kategori, deskripsi, alamat, lokasi_terakhir, tanggal, waktu, gambar);

//             // Tampilkan pop-up "Selamat, postingan telah ditambahkan!"
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Selamat!',
//                 text: 'Postingan telah ditambahkan!',
//                 confirmButtonColor: '#3085d6',
//                 confirmButtonText: 'OK'
//             });
//         }
//     });
// }

// function tampilkanPratinjau(input) {
//     if (input.files && input.files[0]) {
//         const reader = new FileReader();

//         reader.onload = function(e) {
//             document.getElementById('pratinjauGambar').src = e.target.result;
//             document.getElementById('pratinjauGambar').style.display = 'block';
//         }

//         reader.readAsDataURL(input.files[0]); // Baca data file sebagai URL
//     }
// }

function tambah() {
    // Isi dari fungsi tambah() tetap sama
}

function tampilkanPratinjau(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            // Perhatikan, selector diubah untuk mencari elemen dalam modal
            $('#tambahModal').find('#pratinjauGambar').attr('src', e.target.result).show();
        }

        reader.readAsDataURL(input.files[0]); // Baca data file sebagai URL
    }
}


function hapus(id) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin menghapus entri ini?',
        text: "Anda tidak akan dapat mengembalikan data ini setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, lakukan penghapusan di sini
            // Contoh menggunakan AJAX untuk mengirim permintaan penghapusan
            $.ajax({
                url: '/hapus/' + id,
                type: 'DELETE', // Atau bisa juga 'POST' tergantung pada konfigurasi route Anda
                success: function (response) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                },
                error: function (xhr, status, error) {
                    Swal.fire(
                        'Error!',
                        'Failed to delete.',
                        'error'
                    )
                }
            });
        }
    });
}



$(document).ready(function () {
    $('#datatablesSimple').DataTable();
});


function confirmLogout(event) {
    event.preventDefault(); // Prevent default link behavior

    // Show confirmation dialog
    Swal.fire({
        title: 'Apakah Anda yakin ingin keluar?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // If user confirms, proceed to logout
            window.location.href = event.target.href;
        }
    });
}



