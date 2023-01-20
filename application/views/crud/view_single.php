<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Single</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">List Data Single</a></li>
                    <li class="breadcrumb-item active">Lihat Data Single</li>
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
                            <div class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" value="<?php echo $data->number ?>" name="number" readonly placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Select2</label>
                                <input type="text" class="form-control" value="<?php echo $data->select2 ?>" name="select2" readonly placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Textarea" name="textarea" readonly><?php echo $data->textarea ?></textarea>                                
                            </div>
                            <div class="form-group">
                                <label>Input Mask</label>
                                <input type="text" class="form-control" value="<?php echo $data->mask ?>" name="mask" readonly placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Radio</label>
                                <input type="text" class="form-control" value="<?php echo $data->radio ?>" name="radio" readonly placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_crud/list_single">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>