<?php $__env->startSection('title','Thêm mới sản phẩm'); ?>

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
                        <h3 class="card-title">Thêm sản phẩm</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Tên sản phẩm">
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá sản phẩm</label>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Gia san pham">
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá khuyến mãi sản phẩm</label>
                                    <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Gia khuyen mai">
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Danh mục</label>
                                    <select name="category_id" id="category_id" class="form-control custom-select">
                                        <option value="0">--Danh mục--</option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
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
                                    <img alt="product_image" id="show" >
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












                            </div>
                        </div>
                        <!--/row-->
                        <!--/row-->

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm mới</button>
                        <a href="<?php echo e(route('listCategory')); ?>" class="btn btn-danger">Hủy</a>
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookpro/Desktop/DEVELOPMENT/myprojects/project_bkap/looki-1/resources/views/admin/page/product/add.blade.php ENDPATH**/ ?>