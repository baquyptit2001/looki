

<?php $__env->startSection('title','Danh mục'); ?>

<?php $__env->startSection('main'); ?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách danh mục</h4>
                        <div class="table-responsive">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Size</th>
                                        <th>Giá</th>
                                        <th>Giá khuyến mãi</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $product->size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo e($item->product->name); ?></td>
                                        <td><?php echo e($item->size); ?></td>
                                        <td><?php echo e($item->price); ?></td>
                                        <td><?php echo e($item->sale_price); ?></td>
                                        <td>
                                            <span class="label label-danger"><a
                                                    href="<?php echo e(route('deleteSize', ['id'=>$item->id])); ?>"
                                                    style="color: #fff">Xóa</a></span>
                                            <span class="label label-info"><a
                                                    href="<?php echo e(route('editSize', ['id'=>$item->id])); ?>"
                                                    style="color: #fff">Sửa</a></span>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <h3 class="card-title">Thêm Size</h3>
                        <hr>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Tên sản phẩm</label>
                                <input type="text" id="name" class="form-control" placeholder="Tên danh mục"
                                    value="<?php echo e($product->name); ?>" disabled>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Size sản phẩm</label>
                                <input type="text" name="size" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Giá sản phẩm</label>
                                <input type="text" name="price" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Giá khuyến mãi</label>
                                <input type="text" name="sale_price" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <!--/row-->
                        <!--/span-->
                        <!--/span-->
                        <!--/row-->

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm
                            mới</button>
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/product/size/index.blade.php ENDPATH**/ ?>