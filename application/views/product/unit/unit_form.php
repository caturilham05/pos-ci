<section class="content-header">
    <h1>Unit<small>&nbsp;Input</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Add Unit</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Unit</h3>
            <div class="pull-right">
                <a href="<?= site_url('unit')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('unit/proses')?>" method="post">
                    <div class="form-group">
                        <label for="name">Unit Name</label>
                        <input type="hidden" name="unit_id" value="<?=$row->unit_id?>">
                        <input type="text" name="name" value="<?=$row->name?>"class="form-control" required/>
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