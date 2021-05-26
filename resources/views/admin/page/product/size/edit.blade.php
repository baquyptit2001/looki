@extends('admin.layout.master')

@section('title','Thêm size sản phẩm')

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
                        <h3 class="card-title">Thêm size sản phẩm</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                    <input type="text" id="name" class="form-control" placeholder="{{ $size->product->name }}" disabled>
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá sản phẩm</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ $size->price }}" placeholder="Gia khuyen mai">
                                    <small class="form-control-feedback">Nhập giá sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Giá khuyến mãi sản phẩm</label>
                                    <input type="text" name="sale_price" id="sale_price" value="{{ $size->sale_price }}" class="form-control" placeholder="Gia khuyen mai">
                                    <small class="form-control-feedback">Nhập tên sản phẩm sản phẩm</small> </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Size sản phẩm</label>
                                    <input type="text" name="size" id="size" value="{{ $size->size }}" class="form-control" placeholder="Size sản phẩm">
                                    <small class="form-control-feedback">Nhập size sản phẩm</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--/row-->

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm mới</button>
                        <a href="{{route('listProduct')}}" class="btn btn-danger">Hủy</a>
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
