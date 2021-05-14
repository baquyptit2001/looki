@extends('admin.layout.master')

@section('title','Chỉnh sửa thương hiệu')

@section('main')
    

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Thêm thương hiệu</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tên thương hiệu</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}" placeholder="Tên danh mục">
                                    <small class="form-control-feedback">Nhập tên thương hiệu sản phẩm</small>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Ảnh thương hiệu</label>
                                    <input type="file" name="upload" id="image" class="form-control" onchange="loadFile(event)" placeholder="Ảnh thương hiệu">
                                    <small class="form-control-feedback">Ảnh thương hiệu</small>
                                    <br>
                                    <img src="{{ asset('uploads/brand/'.$brand->image) }}" alt="product_image" id="show" width="150px" >
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
                                        <input type="radio" id="statuss" name="status" value="1" class="custom-control-input" {{($brand->status==1)?'checked':''}}>
                                        <label class="custom-control-label" for="statuss">Hiện</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="status" name="status" value="0" class="custom-control-input" {{($brand->status==0)?'checked':''}}>
                                        <label class="custom-control-label" for="status">Ẩn</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Thay đổi</button>
                        <a href="{{route('listBrand')}}" class="btn btn-danger">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

@endsection