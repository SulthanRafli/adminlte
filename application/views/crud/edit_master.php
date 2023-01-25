<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Master</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Master</a></li>
                    <li class="breadcrumb-item active">Ubah Data Master</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <form id="basic">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Text" name="text" value="<?php echo $data->text ?>" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_crud/list_master">Kembali</a>
                            <button type="button-submit" class="btn btn-primary" onclick="edit(<?php echo $data->idMaster ?>)">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function edit(id) {
        $("#basic").submit(function(e) {
            swal({
                title: "Anda sudah yakin melakukan perubahan data ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_crud/update_master/" + id,
                        data: $(e.target).serialize(),
                        dataType: "json",
                        success: function(data) {
                            if (data.status === true) {
                                swal({
                                    title: "Berhasil",
                                    text: "Data Berhasil Diperbarui",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_crud/list_master";
                                });
                            } else {
                                swal({
                                    title: "Error",
                                    text: "Data Gagal Diperbarui",
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
        });
    }
</script>