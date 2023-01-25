<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Master</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Master</a></li>
                    <li class="breadcrumb-item active">Lihat Data Master</li>
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
                                <input type="text" class="form-control" value="<?php echo $data->text ?>" name="text" readonly placeholder="Nama">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_crud/list_master">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>