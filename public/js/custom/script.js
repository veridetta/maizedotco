$(document).ready(function () {
    // Fungsi untuk mengambil data gejala dari server
    function getGejala() {
        $.ajax({
            url: 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/getAllGejala',
            dataType: 'json',
            type: 'GET',
            success: function (res) {
                var view = '';
                res.forEach(element => {
                    view += '<option>' + (element.nama_gejala ? element.nama_gejala : '') + '</option>';
                });
                $('#pilihan_gejala').html(view);
                $('#totalData').html(res.length);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    // Panggil fungsi getGejala saat halaman pertama dimuat
    getGejala();

    // Event listener untuk perubahan pada bagian_jagung
            $('#bagian_jagung').change(function () {
        var selectedBagian = $(this).val();
        if (selectedBagian === 'Daun') {
            $('#pilihan_gejala').html(`
            <option>Tanaman terlihat kerdil</option>
            <option>Terdapat garis-garis berwarna agak kekuningan (khlorotik) memanjang sejajar tulang daun</option>
            <option>Bunga jantan berubah menjadi massa daun yang berlebihan</option>
            <option>Daun-daun menggulung</option>
            <option>Tongkol tidak terbentuk</option>
            <option>Terdapat serbuk seperti tepung di permukaan bawah daun</option>
            <option>Bercak berwarna cokelat atau merah orangnye seperti karat pada permukaan daun atas dan bawah</option>
            <option>Bercak kecil berbentuk oval pada daun</option>
            <option>Daun layu dan kering</option>
            <option>Bercak bewarna cokelat kemerahan berbentuk kumparan dengan pinggiran bercak bewarna hijau kuning atau khlorotik pada permukaan daun</option>
            <option>Biji rusak dan busuk</option>
            <option>Tongkol gugur</option>
            <option>Bercak di seluruh bagian tanaman seperti daun, pelepah, batang, tangkai kelobot, bulir dan tongkol</option>
            <option>Hawar berwarna abu-abu seperti terbakar atau mengering</option>
            <option>Bercak memanjang berbentuk ellips</option>
            <option> Bercak kering yang luas (hawar) berwarna hijau keabu-abuan atau cokelat</option>
            <option>Daun berwarna mosaik atau hijau</option>`);
        } else if (selectedBagian === 'Batang'){
            $('#pilihan_gejala').html(`
            <option>Bagian dalam batang busuk dan mudah rebah</option>
            <option>Bagian kulit luar tipis</option>
            <option>Pangkal batang bewarna kecoklatan</option>`);
        } else if (selectedBagian === 'Pelepah'){
            $('#pilihan_gejala').html(`
            <option>Bercak jamur bewarna agak kemerahan menjadi abu-abu pudar pada permukaan pelepah</option>
            <option>Bercak meluas dan terpisah pisah seperti gejala panu</option>
            <option>Pembentukan gumpalan keraskeras (sklerotia) yang tidak beraturan berwarna putih hingga cokelat gelap</option>
            <option>Bagian dalam biji berwarna gelap dan menjadi massa tepung berwarna cokelat gelap sampai hitam</option>
            <option>Bengkakan besar pada biji-biji tongkol</option>`);
        } else {
            getGejala();
        }
    });


    $('#btn_diagnosis').click(function () {
        var selectedBagian = $('#bagian_jagung').val();
        var selectedGejala = $('#pilihan_gejala').val();

        if (selectedBagian === 'Daun' && selectedGejala === 'Tanaman terlihat kerdil') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Terdapat garis-garis berwarna agak kekuningan (khlorotik) memanjang sejajar tulang daun') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bunga jantan berubah menjadi massa daun yang berlebihan') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Daun-daun menggulung') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Tongkol tidak terbentuk') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Terdapat serbuk seperti tepung di permukaan bawah daun') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bulai');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak berwarna cokelat atau merah orangnye seperti karat pada permukaan daun atas dan bawah') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Karat Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak kecil berbentuk oval pada daun') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Karat Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Daun layu dan kering') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Karat Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak bewarna cokelat kemerahan berbentuk kumparan dengan pinggiran bercak bewarna hijau kuning atau khlorotik pada permukaan daun') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bercak Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Biji rusak dan busuk') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bercak Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Tongkol gugur') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bercak Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak di seluruh bagian tanaman seperti daun, pelepah, batang, tangkai kelobot, bulir dan tongkol') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Bercak daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Hawar berwarna abu-abu seperti terbakar atau mengering') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Hawar Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak memanjang berbentuk ellips') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Hawar Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Bercak kering yang luas (hawar) berwarna hijau keabu-abuan atau cokelat') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Hawar Daun');
        } else if (selectedBagian === 'Daun' && selectedGejala === 'Daun berwarna mosaik atau hijau') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Mosaik Jagung');
        }
        
        if (selectedBagian === 'Batang' && selectedGejala === 'Bagian dalam batang busuk dan mudah rebah') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        }else if (selectedBagian === 'Batang' && selectedGejala === 'Bagian kulit luar tipis') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        } else if (selectedBagian === 'Batang' && selectedGejala === 'Pangkal batang bewarna kecoklatan') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        } 


        if (selectedBagian === 'Pelepah' && selectedGejala === 'Bercak jamur bewarna agak kemerahan menjadi abu-abu pudar pada permukaan pelepah') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        }else if (selectedBagian === 'Pelepah' && selectedGejala === 'Bercak meluas dan terpisah pisah seperti gejala panu') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        } else if (selectedBagian === 'Pelepah' && selectedGejala === 'Pembentukan gumpalan keraskeras (sklerotia) yang tidak beraturan berwarna putih hingga cokelat gelap') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Busuk Batang');
        } else if (selectedBagian === 'Pelepah' && selectedGejala === 'Bagian dalam biji berwarna gelap dan menjadi massa tepung berwarna cokelat gelap sampai hitam') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Gosong');
        } else if (selectedBagian === 'Pelepah' && selectedGejala === 'Bengkakan besar pada biji-biji tongkol') {
            // Jika kondisi sesuai, tampilkan teks "Penyakit 1"
            $('#hasil_pilihan').text('Penyakit Gosong');
        } 



    });



    $('#add').click(function () {
        $('#modalAdmin').modal('show');

        $('#id').val('');
        $('#nama_penyakit').val('');
        $('#deskripsi').val('');
        $('#solusi').val('');
    });

    $('.edit').click(function () {
        var id = $(this).data('id');

        $.ajax({
            url: "/penyakit/edit/" + id,
            type: "GET",
            success: function (res) {
                var data = res[0];

                $("#modalAdmin").modal("show");

                $("#id").val(data._id);
                $("#nama_penyakit").val(data.nama_penyakit);
                $("#deskripsi").val(data.deskripsi);
                $("#solusi").val(data.solusi);

            },
            error: function (err) {
                console.log(err);
            },
        });
    });
});