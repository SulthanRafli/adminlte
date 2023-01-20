<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List Data Multiple</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Data Multiple</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a type="button" href="<?php echo base_url(); ?>C_crud/add_multiple" class="btn btn-md btn-primary">Tambah Data Multiple</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" width="10%">No</th>
                                    <th class="text-center">Text</th>
                                    <th class="text-center">Number</th>
                                    <th class="text-center" width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $no = 1;
                                foreach ($data as $ll) {
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$ll->text</td>
                                            <td>$ll->number</td>                                                                                                                             
                                            <td>
                                                <div class='btn-group-vertical'>
                                                    <a type='button' href='" . base_url() . "C_crud/view_multiple/$ll->idMultiple' class='btn btn-md btn-primary'>Lihat</a>
                                                    <a type='button' href='" . base_url() . "C_crud/edit_multiple/$ll->idMultiple' class='btn btn-md btn-warning text-white'>Ubah</a>
                                                    <button type='button' class='btn btn-md btn-danger' onclick='deleteData($ll->idMultiple)'>Hapus</button>
                                                </div>
                                            </td>
                                        </tr>                                        
                                        ";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function deleteData(id) {
        swal({
            title: "Anda sudah yakin melakukan penghapusan data?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: baseUrl + "C_crud/delete_multiple/" + id,
                    dataType: "json",
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Terhapus",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                window.location = baseUrl + "C_crud/list_multiple";
                            });
                        } else {
                            swal({
                                title: "Error",
                                text: "Data Gagal Dihapus",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    },
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
        return false;
    }
</script>