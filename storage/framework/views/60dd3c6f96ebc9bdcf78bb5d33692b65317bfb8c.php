<?php $__env->startSection('title','Chỉnh sửa thông tin sản phẩm'); ?>

<?php $__env->startSection('main'); ?>


    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                            <h3 class="card-title">Thêm sản phẩm</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Tên sản phẩm</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Tên sản phẩm" value="<?php echo e($pro->name); ?>">
                                        <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Giá sản phẩm</label>
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Gia san pham" value="<?php echo e($pro->price); ?>">
                                        <small class="form-control-feedback">Nhập giá sản phẩm</small> </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Giá khuyến mãi sản phẩm</label>
                                        <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Gia khuyen mai" value="<?php echo e($pro->sale_price); ?>">
                                        <small class="form-control-feedback">Nhập giá khuyến mãi sản phẩm</small> </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Size sản phẩm</label>
                                        <input type="text" name="size" id="sale_price" class="form-control" placeholder="Gia khuyen mai" value="<?php echo e($pro->size); ?>">
                                        <small class="form-control-feedback">Nhập size sản phẩm</small> </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Danh mục</label>
                                        <select name="category_id" id="category_id" class="form-control custom-select">
                                            <option value=""></option>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$pro->category_id)?'selected':''); ?>><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <small class="form-control-feedback">Chọn danh mục</small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Ảnh sản phẩm</label>
                                        <input type="file" name="upload" id="image" class="form-control" onchange="loadFile(event)" placeholder="Tên sản phẩm">
                                        <small class="form-control-feedback">anh sản phẩm</small>
                                        <br>
                                        <img alt="product_image" id="show" src="<?php echo e(asset('uploads/'.$pro->image)); ?>">
                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById('show');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Ảnh chi tiết</label>
                                        <input type="file" name="uploads[]" id="image" class="form-control" placeholder="Tên sản phẩm" multiple>
                                        <small class="form-control-feedback">anh chi tiet sản phẩm</small> </div>
                                        <div class="row">
                                            <?php $__currentLoopData = $img_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($item->product_id==$pro->id): ?>
                                                    <div class="col-3">
                                                        <div style="width: 100%; position: relative;">
                                                            <img src="<?php echo e(asset('uploads/'.$item->image)); ?>" alt="" class="w-100" style=" border-radius: 5px;">
                                                            <p style="background: white; font-weight: bold; position: absolute; z-index: 1; top: 0; left: 0; padding: 5px 10px; border-radius: 5px;"><?php echo e($item->image); ?></p>
                                                            <div
                                                                style="position: absolute; z-index: 1; right: 0;top: 0;">
                                                                <span class="label label-danger"><a href="<?php echo e(route('deleteImg', ['id'=>$item->id])); ?>" onclick="return confirm('Bạn có muốn xóa ảnh sản phẩm này không?')" style="color: #fff; font-weight: bold; font-size: 15px">X</a></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Cập nhật</button>
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/product/edit-product.blade.php ENDPATH**/ ?>