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
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Danh mục cha</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($category as $item)
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{($item->status)? "Hiện" : "Ẩn"}}</td>
                                        <td>{{$parent[$item->parent_id]}}</td>
                                        <td>
                                            <span class="label label-danger"><a href="{{ route('deleteCategory', ['id'=>$item->id]) }}" style="color: #fff">Xóa</a></span> 
                                            <span class="label label-info"><a href="{{ route('editCategory', ['id'=>$item->id]) }}" style="color: #fff">Sửa</a></span> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('addCategory')}}" class="btn btn-success">Thêm mới</a>
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