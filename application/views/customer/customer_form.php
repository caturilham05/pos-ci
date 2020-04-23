<section class="content-header">
    <h1>Customers<small>&nbsp;Input</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Customers</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Customers</h3>
            <div class="pull-right">
                <a href="<?= site_url('pelanggan')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('pelanggan/proses')?>" method="post">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="hidden" name="customer_id" value="<?=$row->customer_id?>">
                        <input type="text" name="name" value="<?=$row->name?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="">- Choose Gender -</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : ''?>>- Laki-Laki -</option>
                                <option value="P"<?= $row->gender == 'P' ? 'selected' : ''?>>- Perempuan -</option>
                            </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="<?=$row->phone?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?=$row->email?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="<?=$row->address?>"class="form-control"required/>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success"><i class="fa fa-send"></i>&nbsp;Save</button>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>&nbsp;reset</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>