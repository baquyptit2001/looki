

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
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Danh mục cha</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e(($item->status)? "Hiện" : "Ẩn"); ?></td>
                                        <td><?php echo e($parent[$item->parent_id]); ?></td>
                                        <td>
                                            <span class="label label-danger"><a href="<?php echo e(route('deleteCategory', ['id'=>$item->id])); ?>" style="color: #fff">Xóa</a></span> 
                                            <span class="label label-info"><a href="<?php echo e(route('editCategory', ['id'=>$item->id])); ?>" style="color: #fff">Sửa</a></span> 
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <a href="<?php echo e(route('addCategory')); ?>" class="btn btn-success">Thêm mới</a>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/category/index.blade.php ENDPATH**/ ?>