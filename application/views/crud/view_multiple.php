<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Multiple</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Multiple</a></li>
                    <li class="breadcrumb-item active">Tambah Data Multiple</li>
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
                                <input type="text" class="form-control" placeholder="Text" name="text" value="<?php echo $data->text ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number</label>
                                <input type="number" class="form-control" placeholder="Number" name="number" value="<?php echo $data->number ?>" readonly />
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tableItem">
                                            <thead class="text-center">
                                                <tr>
                                                    <th width="10%">No</th>
                                                    <th>Text</th>
                                                    <th>Select2</th>
                                                    <th>Number</th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_item">
                                                <?php
                                                $no = 1;
                                                foreach ($data_detail as $ll) {
                                                    echo "
                                                        <tr class='list_item text-center'>
                                                        <td>$no</td>
                                                        <td>$ll->text</td>
                                                        <td>$ll->select2</td>
                                                        <td>$ll->number</td>                                                                                                        
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
                            <div class="form-group" style="text-align-last: right; margin-bottom: 0px">
                                <a type="button" href="<?php echo base_url("C_crud/list_multiple") ?>" class="btn btn-danger text-white">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>