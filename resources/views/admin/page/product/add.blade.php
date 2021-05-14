@extends('admin.layout.master')

@section('title','Thêm mới sản phẩm')

@section('main')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            @if (count($errors -> all()))
                <div class="alert alert-danger" role="alert">
                  @foreach ($errors -> all() as $error)
                    {{$error}}
                    @break
                  @endforeach
                </div>
            @endif
            <div class="col-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Size sản phẩm</label>
                                    <input type="text" name="size" id="size" class="form-control" placeholder="Size sản phẩm">
                                    <small class="form-control-feedback">Nhập size sản phẩm</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Danh mục</label>
                                    <select name="category_id" id="category_id" class="form-control custom-select">
                                        <option value="0">--Danh mục--</option>
                                        @foreach ($category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-control-feedback">Chọn danh mục</small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Thương hiệu</label>
                                    <select name="brand_id" id="category_id" class="form-control custom-select">
                                        <option value="0">--Thương hiệu--</option>
                                        @foreach ($brand as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-control-feedback">Chọn thương hiệu</small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Ảnh sản phẩm</label>
                                    <input type="file" name="upload" id="image" class="form-control" onchange="loadFile(event)" placeholder="Tên sản phẩm">
                                    <small class="form-control-feedback">anh sản phẩm</small>
                                    <br>
                                    <img src="{{ asset('uploads/avatar/assmin.jpg') }}" alt="product_image" id="show" width="150px" >
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
                        <a href="{{route('listCategory')}}" class="btn btn-danger">Hủy</a>
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
