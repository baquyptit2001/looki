

<?php $__env->startSection('title','Thêm size sản phẩm'); ?>

<?php $__env->startSection('main'); ?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <?php if(count($errors -> all())): ?>
                <div class="alert alert-danger" role="alert">
                  <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($error); ?>

                    <?php break; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <h3 class="card-title">Thêm size sản phẩm</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                    <input type="text" id="name" class="form-control" placeholder="<?php echo e($size->product->name); ?>" disabled>
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá sản phẩm</label>
                                    <input type="text" name="price" id="price" class="form-control" value="<?php echo e($size->price); ?>" placeholder="Gia khuyen mai">
                                    <small class="form-control-feedback">Nhập giá sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá khuyến mãi sản phẩm</label>
                                    <input type="text" name="sale_price" id="sale_price" value="<?php echo e($size->sale_price); ?>" class="form-control" placeholder="Gia khuyen mai">
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Size sản phẩm</label>
                                    <input type="text" name="size" id="size" value="<?php echo e($size->size); ?>" class="form-control" placeholder="Size sản phẩm">
                                    <small class="form-control-feedback">Nhập size sản phẩm</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--/row-->

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm mới</button>
                        <a href="<?php echo e(route('listProduct')); ?>" class="btn btn-danger">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/product/size/add.blade.php ENDPATH**/ ?>