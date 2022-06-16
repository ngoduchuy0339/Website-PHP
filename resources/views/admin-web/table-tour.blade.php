@extends('admin-web.index')

@section('content-admin')
<div class="row">
    <!-- Container Begin -->
    <div class="row" style="margin-top:-20px">

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
                        <h3 class="box-title"><i class="fontello-th-large-outline"></i>
                            <span>Bảng Tour Du Lịch</span>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body " style="display: block;">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên Tour</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thông tin</th>
                                    <th>Ảnh</th>
                                    <th>Thành phố khởi hành</th>
                                    <th>Ngày khởi hành</th>
                                    <th>Số ngày đi</th>
                                    <th>Chỉnh sửa</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($tours as $tour)
                                    <tr>
                                        <td>{{ $tour->id }}</td>
                                        <td>{{ $tour->tour_name }}</td>
                                        <td>{{ number_format($tour->price) }} đ</td>
                                        <td>{{ $tour->quantity }}</td>
                                        <td>{{ $tour->tour_info }}</td>
                                        <td><img src="/storage/{{ $tour->tour_img }}" alt="..." style="width:100px;height:100px" class=""></td>
                                        <td>{{ $tour->city_start }}</td>
                                        <td>{{ $tour->date_start }}</td>
                                        <td>{{ $tour->date_duration }}</td>
                                        <td><a href="
                                            {{-- {{ route('admin_table_tour_edit', ['tour' => $tour->id])}} --}}
                                        admin/table/tour/{{ $tour->id }}/edit
                                         " class="tiny radius button bg-aqua">Chỉnh sửa</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                        {{ $tours->links() }}

                    </div>
                    <!-- end .timeline -->
                </div>
                <!-- box -->
            </div>


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
                            <h3 class="box-title"><i class="fontello-th-outline"></i>
                                <span>Cập nhật gần đây</span>
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body " style="display: block;">
                            <div class="row" style="margin-bottom:10px;">
                                <div class="large-4 columns">
                                    {{-- <input class="form-control" id="filter" placeholder="Search..." type="text" /> --}}
                                </div>
                                <div class="large-2 columns">
                                    {{-- <select class="filter-status form-control">
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                        <option value="suspended">Suspended</option>
                                    </select> --}}
                                </div>
                                <div class="large-6 columns">
                                    <a href="{{ route('admin_tour_add') }}" style="margin-left:10px;" class="pull-right btn bg-red clear-filter" title="clear filter">Thêm Tour</a>
                                </div>

                            </div>

                            <table id="footable-res2" class="demo" data-filter="#filter" data-filter-text-only="true">
                                <thead>
                                    <tr>
                                            <th>Id</th>
                                            <th>Tên</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Ảnh</th>
                                            <th>Trạng thái</th>
                                            <th>Thời gian cập nhật</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lastTours as $tour)
                                        <tr>
                                            <td>{{ $tour->id }}</td>
                                            <td>{{ $tour->tour_name }}</td>
                                            <td>{{ $tour->price }}</td>
                                            <td>{{ $tour->quantity }}</td>
                                            <td><img src="/storage/{{ $tour->tour_img }}" alt="..." style="width:100px;height:100px" class=""></td>
                                            <td>
                                                <span class="tiny radius button {{ ($tour->status == 1) ? 'bg-green' : 'secondary' }}" style="cursor: default; color:white; {{ ($tour->status == 1) ? '' : 'color:black' }} ">{{ ($tour->status == 1) ? 'Hoạt động' : 'Ngưng hoạt động' }}</span>
                                            </td>
                                            <td>{{ $tour->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>

                        </div>
                        <!-- end .timeline -->
                    </div>
                    <!-- box -->
                </div>
            </div>
            <!-- End of Container Begin -->
</div>
@endsection


