<section class="content-header">
    <h1>Suppliers<small>Shop</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Suppliers</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b> Suppliers</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Suppliers</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $supplier => $data) {?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->description ?></td>
                        <td>
                        <a href="<?= site_url('supplier/edit/'.$data->supplier_id)?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <a href="<?= site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>