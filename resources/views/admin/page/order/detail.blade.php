@extends('admin.layout.master')

@section('title',' Chi tiết đơn hàng')

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
                                        <th>Mã đơn hàng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Size</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $p=0; $q=0 ?>
                                    @foreach ($detail as $item)
                                    <tr>
                                        <td><?php echo $i;$i++;$p+=($item->price * $item->quantity);$q+=$item->quantity ?></td>
                                        <td>{{$item->order_id}}</td>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->size->size}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->price * $item->quantity}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>Tổng</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$q}}</td>
                                        <td>{{number_format($p)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($order->status==0)
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Chỉnh sửa đơn hàng</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Tên người nhận</label>
                                        <input type="text" name="cus_name" id="name" class="form-control" placeholder="Tên danh mục" value="{{$order->cus_name}}">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">SĐT người nhận</label>
                                        <input type="text" name="phone" id="name" class="form-control" placeholder="Tên danh mục" value="{{$order->phone}}">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Địa chỉ người nhận</label>
                                        <input type="text" name="address" id="name" class="form-control" placeholder="Tên danh mục" value="{{$order->address}}">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Lưu ý</label>
                                        <input type="text" name="note" id="name" class="form-control" placeholder="Giờ giao, hàng dễ vỡ, etc ..." value="{{$order->note}}">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

@endsection