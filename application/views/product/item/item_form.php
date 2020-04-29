<section class="content-header">
    <h1>Items<small>&nbsp;Input</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Add Items</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Items</h3>
            <div class="pull-right">
                <a href="<?= site_url('item')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('item/proses')?>" method="post">
                    <div class="form-group">
                        <label for="barcode">item Barcode</label>
                        <input type="hidden" name="item_id" value="<?=$row->item_id?>">
                        <input type="text" name="barcode" value="<?=$row->barcode?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">item Name</label>
                        <input type="text" name="name" value="<?=$row->name?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="">- Choose Category -</option>
                                <?php foreach($category->result() as $key => $data) { ?>
                                <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <!-- Selected relasi antar tabel menggunakan helper CI -->
                            <?= form_dropdown('unit', $unit, $selectedunit, ['class' => 'form-control', 'required' => 'required']) ?>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="<?=$row->price?>"class="form-control" required/>
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