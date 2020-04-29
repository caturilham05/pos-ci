<section class="content-header">
    <h1>Unit<small>&nbsp;Product</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Unit</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php $this->view('messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b>&nbsp;Unit</h3>
            <div class="pull-right">
            <a href="<?= site_url('unit/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Unit Category</a> 
            <!-- (pelanggan/add) dari routes -->
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $unit => $data) {?>
                    <tr>
                        <td style="width: 10%"><?=$no++?>.</td>
                        <td style="width: 70%"><?=$data->name?></td>
                        <td>
                        <a href="<?= site_url('unit/edit/'.$data->unit_id)?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <a href="<?= site_url('unit/del/'.$data->unit_id)?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>