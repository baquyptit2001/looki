@extends('admin.layout.master')

@section('title','Sản phẩm')

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
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Danh Mục</th>
                                        <th>Thương hiệu</th>
                                        <th>Size</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($product as $item)
                                        <tr>
                                            <td>{{$id, $id++}}</td>
                                            <td>
                                                <div>
                                                    <img src="{{ asset('uploads/product/'.$item->image) }}" alt="" style="width: 75px">
                                                </div>
                                            </td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{$item->brand->name}}</td>
                                            <td>@foreach ($item->size as $sz)
                                                {{ $sz->size.' ' }}
                                            @endforeach
                                            <br>
                                            <a href="{{ route('listSize', ['id'=>$item->id]) }}">Chi Tiết</a>
                                            </td>
                                            <td>
                                                <span class="label label-danger"><a href="{{ route('deleteProduct', ['id'=>$item->id]) }}" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" style="color: #fff">Xóa</a></span>
                                                <span class="label label-info"><a href="{{ route('editProduct', ['id'=>$item->id]) }}" style="color: #fff">Sửa</a></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('addProduct')}}" class="btn btn-success">Thêm mới</a>
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

@endsection
