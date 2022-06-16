@extends('admin-web.index')

@section('content-admin')
<div class="row">
    <div class="large-12 columns">
        <div class="box">
            <div class="box-header bg-transparent">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                    </span>
                    {{-- <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                    </span> --}}
                </div>
                <h2 class="box-title"><i class="icon-menu"></i>
                    <span>Bảng người dùng</span>
                </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body " style="display: block;">

                <table style="width:100%;">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>E-Mail</th>
                            <th>Avatar</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img src="/storage/{{ $user->avatar }}" alt="..." style="width:100px;height:100px" class=""></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $users->links() }}
            </div>

        </div>
        <!-- box -->
    </div>
   
</div>
@endsection


