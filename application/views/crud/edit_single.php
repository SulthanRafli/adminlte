<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Single</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Single</a></li>
                    <li class="breadcrumb-item active">Ubah Data Single</li>
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
                                <input type="text" class="form-control" placeholder="Text" name="text" id="text" value="<?php echo $data->text ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Number</label>
                                <input type="number" class="form-control" placeholder="Number" value="<?php echo $data->number ?>" name="number" id="number" required>
                            </div>
                            <div class="form-group">
                                <label>Select2</label>
                                <select class="form-control select2bs4" data-placeholder="Pilih.." id="select2" name="select2" style="width: 100%;" required>
                                    <option value="">Pilih</option>
                                    <?php foreach ($data_master as $dm) {  
                                        $selected = $dm->idMaster === $data->idMaster ? 'selected' : '';
                                        echo "<option value='$dm->idMaster' $selected>$dm->text</option>";
                                    } ?>                       
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Textarea" name="textarea" id="textarea"><?php echo $data->textarea ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Input Mask</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input id="datemask" type="text" class="form-control" value="<?php echo $data->mask ?>" name="mask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d", strtotime($data->date))  ?>" name="date" id="date" required>
                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" class="form-control" placeholder="Time" value="<?php echo $data->time ?>" name="time" id="time" required>
                            </div>
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control" placeholder="File" name="file" id="file" >
                                <input type="hidden" class="form-control"  name="oldFile" id="oldFile" value="<?php echo $data->file ?>">
                            </div>
                            <div class="form-group">
                                <label>Radio</label>
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" value="radio1" name="radio">
                                        <label for="radioPrimary1">
                                            Radio 1
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary2" value="radio2" name="radio">
                                        <label for="radioPrimary2">
                                            Radio 2
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary3" value="radio3" name="radio">
                                        <label for="radioPrimary3">
                                            Radio 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_crud/list_single">Kembali</a>
                            <button type="button-submit" class="btn btn-primary" onclick="edit(<?php echo $data->idSingle ?>)">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    window.onload = function() {        
        $("input[name=radio][value=" + "<?php echo $data->radio ?>" + "]").attr('checked', 'checked');
    };

    function edit(id) {
        $("#basic").submit(function(e) {
            let fileData = $("#file").prop("files")[0] ? $("#file").prop("files")[0] : "";     
            
            let formData = new FormData();
            formData.append("text", $("#text").val());                                              
            formData.append("number", $("#number").val());                                              
            formData.append("select2", $("#select2").val());                                              
            formData.append("textarea", $("#textarea").val());                                              
            formData.append("mask", $("#datemask").val());                                              
            formData.append("date", $("#date").val());                                              
            formData.append("time", $("#time").val());                                                                                                     
            formData.append("radio", $('input[name="radio"]:checked').val());                                                                                                     
            formData.append("file", fileData);
            formData.append("oldFile", $("#oldFile").val());

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
                        url: baseUrl + "C_crud/update_single/" + id,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        data: formData,
                        dataType: "json",
                        success: function(data) {
                            if (data.status === true) {
                                swal({
                                    title: "Berhasil",
                                    text: "Data Berhasil Diperbarui",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_crud/list_single";
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