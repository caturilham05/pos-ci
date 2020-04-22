<section class="content-header">
    <h1>Users<small>Pengguna</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b> Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add User</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $user => $data) {?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->level == 1 ? "Admin" : "Kasir" ?></td>
                        <td><?=$data->email?></td>
                        <td>
                        <form action="<?= site_url('user/del')?>" method="post">
                        <a href="<?= site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                        <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>