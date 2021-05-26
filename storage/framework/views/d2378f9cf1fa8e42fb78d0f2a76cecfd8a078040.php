

<?php $__env->startSection('title','Thêm mới bài viết'); ?>

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
                        <h3 class="card-title">Thêm bài viết</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tiêu đề bài viết</label>
                                    <input type="text" name="title" id="name" class="form-control" placeholder="Tên danh mục">
                                    <small class="form-control-feedback">Nhập tiêu đề</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Nội dung bài viết</label>
                                    <textarea type="text" name="content" id="name" class="form-control" placeholder="Tên danh mục">
                                    <small class="form-control-feedback">Nhập nội dung</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Ảnh blog</label>
                                    <input type="file" name="upload" id="image" class="form-control" onchange="loadFile(event)" placeholder="Ảnh thương hiệu">
                                    <small class="form-control-feedback">Ảnh thương hiệu</small>
                                    <br>
                                    <img src="<?php echo e(asset('uploads/avatar/assmin.jpg')); ?>" alt="product_image" id="show" width="150px" >
                                    <script>
                                        var loadFile = function(event) {
                                            var image = document.getElementById('show');
                                            image.src = URL.createObjectURL(event.target.files[0]);
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <!--/span-->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Trạng thái</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="statuss" name="status" value="1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="statuss">Hiện</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="status" name="status" value="0" class="custom-control-input">
                                        <label class="custom-control-label" for="status">Ẩn</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm mới</button>
                        <a href="<?php echo e(route('listBrand')); ?>" class="btn btn-danger">Hủy</a>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/admin/page/blog/add.blade.php ENDPATH**/ ?>