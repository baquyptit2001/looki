@extends('admin.layout.master')

@section('title','Tài khoản')

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
                                        <th>Avatar</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Giới tính</th>
                                        <th>Role</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($account as $item)
                                    <tr>
                                        <td><?php echo $i;$i++; ?></td>
                                        <td><img src="{{ asset(($item->avatar==null) ? 'uploads/avatar/default-avatar.jpg':'uploads/avatar/'.$item->avatar )}}" width="100px" alt=""></td>
                                        <td>{{$item->user_name}}</td>
                                        <td>{{$item->email}}</td>
                                        @if ($item->gender!=null)
                                            <td>{{($item->Gender)? "Nam" : "Nữ"}}</td>
                                        @else
                                            <td>Chưa nhập</td>    
                                        @endif
                                        @if ($item->role==2)
                                            <td>Admin</td>
                                        @else
                                            <td>{{($item->role)? "Mod" : "User"}}</td>
                                        @endif
                                        <td>{{($item->status)? "Hoạt động" : "Bị cấm"}}</td>
                                        @if ($item->id===Auth::id())
                                            <td style="font-style: italic">You</td>
                                        @else    
                                            @if ($item->role<2)
                                                <td>
                                                    @if ($item->status)
                                                        <span class="label label-danger"><a href="{{ route('banAccount', ['id'=>$item->id]) }}" style="color: #fff">Ban</a></span> 
                                                    @else
                                                        <span class="label label-danger"><a href="{{ route('banAccount', ['id'=>$item->id]) }}" style="color: #fff">Unban</a></span> 
                                                    @endif
                                                    @if ($item->role)
                                                        <span class="label label-info"><a href="{{ route('roleUp', ['id'=>$item->id]) }}" style="color: #fff">Gỡ mod</a></span> 
                                                    @else
                                                        <span class="label label-info"><a href="{{ route('roleUp', ['id'=>$item->id]) }}" style="color: #fff">Nâng mod</a></span> 
                                                    @endif
                                                </td>
                                            @endif
                                        @endif
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