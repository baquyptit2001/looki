

<?php $__env->startSection('title','Đơn hàng'); ?>

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
                                        <th>Tên tài khoản</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng giá</th>
                                        <th>SĐT</th>
                                        <th>Địa chỉ</th>
                                        <th>Lưu ý</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><?php echo e($item->account->user_name); ?></td>
                                        <td><?php echo e($item->cus_name); ?></td>
                                        <td><?php echo e($item->total_price); ?></td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td><?php echo e($item->note); ?></td>
                                        <td>
                                            <?php if($item->status == 0): ?>
                                                <span class="label label-info">Đang chuẩn bị đơn hàng</span>
                                            <?php endif; ?>
                                            <?php if($item->status == 1): ?>
                                                <span class="label label-info">Đang giao hàng</span>
                                            <?php endif; ?>
                                            <?php if($item->status == -1): ?>
                                                <span class="label label-success">Giao hàng thành công</span>
                                            <?php endif; ?>
                                            <?php if($item->status == -2): ?>
                                                <span class="label label-danger">Đã hủy</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($item->status == 0): ?>
                                                <span class="label label-danger"><a href="<?php echo e(route('cancelOrder', ['id'=>$item->id])); ?>" style="color: #fff">Hủy đơn</a></span> 
                                            <?php endif; ?>
                                            <?php if($item->status>=0): ?>
                                                <span class="label label-success"><a href="<?php echo e(route('statusOrder', ['id'=>$item->id])); ?>" style="color: #fff">Thay đổi trạng thái</a></span> 
                                            <?php endif; ?>
                                            <span class="label label-info"><a href="<?php echo e(route('detailOrder', ['id'=>$item->id])); ?>" style="color: #fff">Chi tiết</a></span> 
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
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/order/index.blade.php ENDPATH**/ ?>