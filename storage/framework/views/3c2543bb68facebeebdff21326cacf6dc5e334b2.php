

<?php $__env->startSection('title','Thương hiệu'); ?>

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
                        <h4 class="card-title">Danh sách thương hiệu</h4>
                        <div class="table-responsive">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh thương hiệu</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td>
                                            <div>
                                                <img src="<?php echo e(asset('uploads/brand/'.$item->image)); ?>" alt="" style="width: 75px">
                                            </div>
                                        </td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e(($item->status)? "Hiện" : "Ẩn"); ?></td>
                                        <td>
                                            <span class="label label-danger"><a href="<?php echo e(route('deleteBrand', ['id'=>$item->id])); ?>" style="color: #fff">Xóa</a></span> 
                                            <span class="label label-info"><a href="<?php echo e(route('editBrand', ['id'=>$item->id])); ?>" style="color: #fff">Sửa</a></span> 
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <a href="<?php echo e(route('addBrand')); ?>" class="btn btn-success">Thêm mới</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/brand/index.blade.php ENDPATH**/ ?>