$(document).ready(function () {
  // fungsi untuk menyimpan data penyakit
  function saveForm(event) {
      event.preventDefault();

      var dto = {
          id: $('#id').val(),
          nama_penyakit: $('#nama_penyakit').val(),
          deskripsi: $('#deskripsi').val(),
          solusi: $('#solusi').val(),
      }

      var url = '';
      var customrequest = '';

      if (dto.id) {
          // Update
          url = 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/putPenyakit';
          customrequest = 'PUT';
      } else {
          // Insert
          url = 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/insertPenyakit';
          customrequest = 'POST';
      }

      $.ajax({
          type: customrequest,
          url: url,
          data: dto,
          success: function (data) {
              console.log('save success');
              getAllPenyakit();
              $('#modalAdmin').modal('hide');
          },
          error: function (error) {
              console.error('save error', error);
          }
      });
  }

  // Fungsi untuk mendapatkan data penyakit
  function getAllPenyakit() {
    $.ajax({
        type: 'GET',
        url: 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/getallpenyakit',
        success: function (data) {
            console.log(data);
            populateTable(data);
        },
        error: function (error) {
            console.error('Error in getAllPenyakit:', error);
        }
    });
  }


  // Fungsi untuk mengisi tabel dengan data penyakit
  function populateTable(data) {
    var tbody = $('tbody');
    tbody.empty();

    if (data && data.length > 0) {
        data.forEach(function (row) {
            var newRow = $('<tr>')
                .append($('<td>').html('<a href="javascript:void(0);" class="btn btn-warning btn-sm edit" data-id="' + row._id + '" style="margin-bottom: 5px; width: 57px;">Ubah</a>' +
                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm delete" data-id="' + row._id + '" onclick="return confirm(\'Apakah Anda yakin akan menghapus data?\');">Hapus</a>'))
                .append($('<td>').text(row.nama_penyakit || ''))
                .append($('<td>').text(row.deskripsi || ''))
                .append($('<td>').text(row.solusi || ''));

            tbody.append(newRow);
        });
    } else {
        var noDataRow = $('<tr>').append($('<td colspan="4">').text('Tidak ada data.'));
        tbody.append(noDataRow);
    }
  }




  // Panggil fungsi untuk mendapatkan data saat dokumen sudah siap
  getAllPenyakit();

  // Tambahkan event handler untuk tombol "Tambah Data"
  $('#add').click(function () {
      $('#modalAdmin').modal('show');
      $('#id').val();
      $('#nama_penyakit').val();
      $('#deskripsi').val();
      $('#solusi').val();
  });

  // Tambahkan event handler untuk tombol "Ubah"
  $('body').on('click', '.edit', function () {
      var id = $(this).data('id');

      $.ajax({
          url: "https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/getPenyakitById?id=" + id,
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

  // Tambahkan event handler untuk form penyimpanan data
  $('#formAdmin').submit(function (event) {
      event.preventDefault();
      saveForm(event);
  });

  $('body').on('click', '.delete', function () {
      var id = $(this).data('id');

      // Panggil endpoint delete
      $.ajax({
        url: 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-lygjy/endpoint/deletePenyakitById?id=' + id,
        type: 'DELETE',
        success: function (response) {
            // Refresh halaman setelah berhasil menghapus
            window.location.reload();
        },
        error: function (error) {
            console.error('Error in delete:', error);
            // Tampilkan pesan error jika diperlukan
            alert('Gagal menghapus data.');
        }
    });
  });
});
