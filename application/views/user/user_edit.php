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
            <h3 class="box-title"><b>Edit</b> Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="" method="post">
                    <div class="form-group <?= form_error('name') ? 'has-error' : null?>">
                        <label for="name">Name</label>
                        <input type="hidden" name="user_id" value="<?php echo $row->user_id?>">
                        <input type="text" name="name" value="<?=$this->input->post('name') ?? $row->name?>"class="form-control"/>
                        <span class="help-block"><?= form_error('name')?></span>
                    </div>
                   
                    <div class="form-group <?= form_error('username') ? 'has-error' : null?>">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control" />
                        <?= form_error('username')?>
                    </div>
                   
                    <div class="form-group <?= form_error('password') ? 'has-error' : null?>">
                        <label for="password">Password</label><small>(Optional)</small>
                        <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control" />
                        <?= form_error('password')?>
                    </div>
                   
                    <div class="form-group <?= form_error('passconf') ? 'has-error' : null?>">
                        <label for="password">Password Confirmation</label><small>(Optional)</small>
                        <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control" />
                        <?= form_error('passconf')?>
                    </div>
                   
                    <div class="form-group <?= form_error('email') ? 'has-error' : null?>">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?=$this->input->post('email') ?? $row->email?>" class="form-control" />
                        <?= form_error('email')?>
                    </div>
                   
                    <div class="form-group <?= form_error('address') ? 'has-error' : null?>">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea>
                        <?= form_error('address')?>
                    </div>
                   
                    <div class="form-group <?= form_error('level') ? 'has-error' : null?>">
                        <label for="level">Level</label>
                        <select name="level" class="form-control">
                            <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                            <option value="1">- Admin -</option>
                            <option value="2"<?= $level == 2 ? 'selected' : null?>>- Kasir -</option>
                        </select>
                        <?= form_error('level')?>
                    </div>
                   
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>&nbsp;Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>