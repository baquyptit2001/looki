

<?php $__env->startSection('title','Tài khoản'); ?>

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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Avatar</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Giới tính</th>
                                        <th>Role</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><img src="<?php echo e(asset(($item->avatar==null) ? 'uploads/avatar/default-avatar.jpg':'uploads/avatar/'.$item->avatar )); ?>" width="100px" alt=""></td>
                                        <td><?php echo e($item->user_name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <?php if($item->gender!=null): ?>
                                            <td><?php echo e(($item->Gender)? "Nam" : "Nữ"); ?></td>
                                        <?php else: ?>
                                            <td>Chưa nhập</td>    
                                        <?php endif; ?>
                                        <td><?php echo e(($item->role)? "Admin" : "User"); ?></td>
                                        <td><?php echo e(($item->status)? "Hoạt động" : "Bị cấm"); ?></td>
                                        <td>
                                            <?php if($item->status): ?>
                                                <span class="label label-danger"><a href="<?php echo e(route('banAccount', ['id'=>$item->id])); ?>" style="color: #fff">Ban</a></span> 
                                            <?php else: ?>
                                                <span class="label label-danger"><a href="<?php echo e(route('banAccount', ['id'=>$item->id])); ?>" style="color: #fff">Unban</a></span> 
                                            <?php endif; ?>
                                            <?php if($item->role): ?>
                                                <span class="label label-info"><a href="<?php echo e(route('roleUp', ['id'=>$item->id])); ?>" style="color: #fff">Gỡ admin</a></span> 
                                            <?php else: ?>
                                                <span class="label label-info"><a href="<?php echo e(route('roleUp', ['id'=>$item->id])); ?>" style="color: #fff">Nâng admin</a></span> 
                                            <?php endif; ?>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki-1\resources\views/admin/page/account/index.blade.php ENDPATH**/ ?>