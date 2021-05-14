@extends('admin.layout.master')

@section('title','Thương hiệu')

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
                        <h4 class="card-title">Danh sách thương hiệu</h4>
                        <div class="table-responsive">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh thương hiệu</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($brand as $item)
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td>
                                            <div>
                                                <img src="{{ asset('uploads/brand/'.$item->image) }}" alt="" style="width: 75px">
                                            </div>
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{($item->status)? "Hiện" : "Ẩn"}}</td>
                                        <td>
                                            <span class="label label-danger"><a href="{{ route('deleteBrand', ['id'=>$item->id]) }}" style="color: #fff">Xóa</a></span> 
                                            <span class="label label-info"><a href="{{ route('editBrand', ['id'=>$item->id]) }}" style="color: #fff">Sửa</a></span> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('addBrand')}}" class="btn btn-success">Thêm mới</a>
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