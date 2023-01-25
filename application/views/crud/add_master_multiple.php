<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Master Multiple</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Master Multiple</a></li>
                    <li class="breadcrumb-item active">Tambah Data Master Multiple</li>
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
                                <label class="form-label">Text</label>
                                <input type="text" class="form-control" placeholder="Text" name="text" required />
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tableItem">
                                            <thead class="text-center">
                                                <tr>
                                                    <td colspan="4" class="text-right"><button type="button" class="btn btn-info" id="btn-add-item">Tambah</button></td>
                                                </tr>
                                                <tr>
                                                    <th>Text</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_item">
                                                <tr class="list_item">
                                                    <td>
                                                        <input class="form-control text" type="text" name="text_detail[]" required>
                                                    </td>
                                                    <td>
                                                        <center><button type="button" class="btn btn-danger btn-delete-item"> Hapus</button></center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align-last: right; margin-bottom: 0px">
                                <a type="button" href="<?php echo base_url("C_crud/list_master_multiple") ?>" class="btn btn-danger text-white">
                                    Kembali
                                </a>
                                <button type="button-submit" onclick="save()" class="btn btn-primary text-white">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    window.onload = function() {
        let jumlah_row = $("#data_item tr").length;

        $(".btn-delete-item").hide();

        $("#btn-add-item").on("click", addRow);

        $("#tableItem").on("click", ".btn-delete-item", function() {
            removeRow($(this));
        });

        if (jumlah_row > 1) $(".btn-delete-item").show();
        else $(".btn-delete-item").hide();

        function addRow() {
            let table_row = $("#data_item tr:last");
            x = 0;
            y = 0;

            let clone = table_row.clone();
            $("#tableItem").append(clone);

            clone.find(".text").val(null);

            jumlah_row++;
            if (jumlah_row > 1) $(".btn-delete-item").show();
            else $(".btn-delete-item").hide();
        }

        function removeRow(e) {
            e.closest("tr").remove();
            jumlah_row--;

            if (jumlah_row <= 1) $(".btn-delete-item").hide();
            else $(".btn-delete-item").show();
        }
    };

    function save() {
        $("#basic").submit(function(e) {
            swal({
                title: "Apa anda yakin ingin menyimpan data ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_crud/save_master_multiple",
                        data: $(e.target).serialize(),
                        dataType: "json",
                        success: function(data) {
                            if (data.status === true) {
                                swal({
                                    title: "Berhasil",
                                    text: "Data Berhasil Tersimpan",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_crud/list_master_multiple";
                                });
                            } else {
                                $(".load").modal("hide");
                                swal({
                                    title: "Error",
                                    text: "Data Gagal Disimpan",
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