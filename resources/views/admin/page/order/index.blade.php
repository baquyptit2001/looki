@extends('admin.layout.master')

@section('title','Đơn hàng')

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
                                        <th>Tên tài khoản</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng giá</th>
                                        <th>SĐT</th>
                                        <th>Địa chỉ</th>
                                        <th>Lưu ý</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($order as $item)
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td>{{$item->account->user_name}}</td>
                                        <td>{{$item->cus_name}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>
                                            @if ($item->status == 0)
                                                <span class="label label-info">Đang chuẩn bị đơn hàng</span>
                                            @endif
                                            @if ($item->status == 1)
                                                <span class="label label-info">Đang giao hàng</span>
                                            @endif
                                            @if ($item->status == -1)
                                                <span class="label label-success">Giao hàng thành công</span>
                                            @endif
                                            @if ($item->status == -2)
                                                <span class="label label-danger">Đã hủy</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 0)
                                                <span class="label label-danger"><a href="{{ route('cancelOrder', ['id'=>$item->id]) }}" style="color: #fff">Hủy đơn</a></span> 
                                            @endif
                                            @if ($item->status>=0)
                                                <span class="label label-success"><a href="{{ route('statusOrder', ['id'=>$item->id]) }}" style="color: #fff">Thay đổi trạng thái</a></span> 
                                            @endif
                                            <span class="label label-info"><a href="{{ route('detailOrder', ['id'=>$item->id]) }}" style="color: #fff">Chi tiết</a></span> 
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
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

@endsection