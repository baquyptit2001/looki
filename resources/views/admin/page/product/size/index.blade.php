@extends('admin.layout.master')

@section('title','Danh mục')

@section('main')


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
                                        <th>Tên sản phẩm</th>
                                        <th>Size</th>
                                        <th>Giá</th>
                                        <th>Giá khuyến mãi</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($product->size as $item)
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->size}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->sale_price}}</td>
                                        <td>
                                            <span class="label label-danger"><a
                                                    href="{{ route('deleteSize', ['id'=>$item->id]) }}"
                                                    style="color: #fff">Xóa</a></span>
                                            <span class="label label-info"><a
                                                    href="{{ route('editSize', ['id'=>$item->id]) }}"
                                                    style="color: #fff">Sửa</a></span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Thêm Size</h3>
                        <hr>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Tên sản phẩm</label>
                                <input type="text" id="name" class="form-control" placeholder="Tên danh mục"
                                    value="{{ $product->name }}" disabled>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Size sản phẩm</label>
                                <input type="text" name="size" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Giá sản phẩm</label>
                                <input type="text" name="price" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Giá khuyến mãi</label>
                                <input type="text" name="sale_price" id="name" class="form-control"
                                    placeholder="Size sản phẩm">
                            </div>
                        </div>
                        <!--/row-->
                        <!--/span-->
                        <!--/span-->
                        <!--/row-->

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Thêm
                            mới</button>
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
