<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List Data Single</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Data Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a type="button" href="<?php echo base_url(); ?>C_crud/add_single" class="btn btn-md btn-primary">Tambah Data Single</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary text-white d-none" id="filterClick" data-toggle="modal" data-target="#filterModal"></button>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" width="10%">No</th>
                                    <th class="text-center">Text</th>
                                    <th class="text-center">Number</th>
                                    <th class="text-center">Master</th>
                                    <th class="text-center">Textarea</th>
                                    <th class="text-center">Radio</th>
                                    <th class="text-center">Mask</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center" width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $no = 1;
                                foreach ($data as $ll) {
                                    $date = date("d/m/Y", strtotime($ll->date));
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$ll->text</td>
                                            <td>$ll->number</td>
                                            <td>$ll->master</td>                                                                                      
                                            <td>$ll->textarea</td>                                                                                                                                                                                                                       
                                            <td>$ll->radio</td>                                                                                      
                                            <td>$ll->mask</td>                                                                                      
                                            <td>$date</td>                                                                                      
                                            <td>$ll->time</td>                                                                                      
                                            <td>
                                                <div class='btn-group-vertical'>
                                                    <a type='button' href='" . base_url() . "C_crud/view_single/$ll->idSingle' class='btn btn-md btn-primary'>Lihat</a>
                                                    <a type='button' href='" . base_url() . "C_crud/edit_single/$ll->idSingle' class='btn btn-md btn-warning text-white'>Ubah</a>
                                                    <button type='button' class='btn btn-md btn-danger' onclick='deleteData($ll->idSingle)'>Hapus</button>
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

<form class="modal fade" id="filterModal" action="<?php echo base_url() . "C_crud/list_single"; ?>" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Filter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" placeholder="Date" name="date" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis", {
                text: 'Filter',
                action: function(e, dt, node, config) {
                    const pagebutton = document.getElementById("filterClick");
                    pagebutton.click();
                }
            }]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

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
                    url: baseUrl + "C_crud/delete_single/" + id,
                    dataType: "json",
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Terhapus",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                window.location = baseUrl + "C_crud/list_single";
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