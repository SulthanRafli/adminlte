<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Multiple</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Multiple</a></li>
                    <li class="breadcrumb-item active">Ubah Data Multiple</li>
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
                                <input type="text" class="form-control" placeholder="Text" value="<?php echo $data->text ?>" name="text" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number</label>
                                <input type="number" class="form-control" placeholder="Number" value="<?php echo $data->number ?>" name="number" required />
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
                                                    <th>Select2</th>
                                                    <th>Number</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_item">
                                                <?php foreach ($data_detail as $ll) { ?>
                                                    <tr class="list_item">
                                                        <td>
                                                            <input class="form-control text" type="text" name="text_detail[]" value="<?php echo $ll->text ?>" required>
                                                        </td>
                                                        <td>
                                                            <select class="form-control select2bs4" placeholder="Select" name="select2_detail[]" style="width: 100%;" required>
                                                                <option value="Alabama" <?= $ll->select2 === 'Alabama' ? 'selected' : '' ?>>Alabama</option>
                                                                <option value="Alaska" <?= $ll->select2 === 'Alaska' ? 'selected' : '' ?>>Alaska</option>
                                                                <option value="California" <?= $ll->select2 === 'California' ? 'selected' : '' ?>>California</option>
                                                                <option value="Delaware" <?= $ll->select2 === 'Delaware' ? 'selected' : '' ?>>Delaware</option>
                                                                <option value="Tennessee" <?= $ll->select2 === 'Tennessee' ? 'selected' : '' ?>>Tennessee</option>
                                                                <option value="Texas" <?= $ll->select2 === 'Texas' ? 'selected' : '' ?>>Texas</option>
                                                                <option value="Washington" <?= $ll->select2 === 'Washington' ? 'selected' : '' ?>>Washington</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control number" type="number" name="number_detail[]" value="<?php echo $ll->number ?>" required>
                                                        </td>
                                                        <td>
                                                            <center><button type="button" class="btn btn-danger btn-delete-item"> Hapus</button></center>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align-last: right; margin-bottom: 0px">
                                <a type="button" href="<?php echo base_url("C_crud/list_multiple") ?>" class="btn btn-danger text-white">
                                    Kembali
                                </a>
                                <button type="button-submit" onclick="edit(<?php echo $data->idMultiple ?>)" class="btn btn-primary text-white">
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
    function initSelect() {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    }

    window.onload = function() {
        initSelect();

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

            table_row.find(".select2bs4").select2("destroy");

            let clone = table_row.clone();
            $("#tableItem").append(clone);

            clone.find(".text").val(null);
            clone.find(".number").val(null);

            clone.find(initSelect());
            table_row.find(initSelect());

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
                        url: baseUrl + "C_crud/update_multiple/" + id,
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
                                    window.location = baseUrl + "C_crud/list_multiple";
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