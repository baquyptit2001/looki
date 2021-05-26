<?php $__env->startSection('title','Sản phẩm'); ?>

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
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>

                                        <th>Giá gốc</th>
                                        <th>Giá km</th>
                                        <th>Danh Mục</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($id, $id++); ?></td>
                                            <td>
                                                <div>
                                                    <img src="<?php echo e(asset('uploads/'.$item->image)); ?>" alt="" style="width: 75px">
                                                </div>
                                            </td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><?php echo e($item->price); ?></td>
                                            <td><?php echo e($item->sale_price); ?></td>
                                            <td><?php echo e($item->category->name); ?></td>
                                            <td>
                                                <span class="label label-danger"><a href="<?php echo e(route('deleteProduct', ['id'=>$item->id])); ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" style="color: #fff">Xóa</a></span>
                                                <span class="label label-info"><a href="<?php echo e(route('editProduct', ['id'=>$item->id])); ?>" style="color: #fff">Sửa</a></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <a href="<?php echo e(route('addProduct')); ?>" class="btn btn-success">Thêm mới</a>
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookpro/Desktop/DEVELOPMENT/myprojects/project_bkap/looki-1/resources/views/admin/page/product/index.blade.php ENDPATH**/ ?>