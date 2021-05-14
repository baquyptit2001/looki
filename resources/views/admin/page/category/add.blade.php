@extends('admin.layout.master')

@section('title','Thêm mới danh mục')

@section('main')
    

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Thêm danh mục</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Tên danh mục</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Tên danh mục">
                                    <small class="form-control-feedback">Nhập tên danh mục sản phẩm</small> </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Danh mục cha</label>
                                    <select name="parent_id" id="parent_id" class="form-control custom-select">
                                        <option value="0">--Danh mục cha--</option>
                                        @foreach ($category as $item)
                                            @if ($item->parent_id==0)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <small class="form-control-feedback">Chọn danh mục cha</small> </div>
                            </div>
                            <!--/span-->
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