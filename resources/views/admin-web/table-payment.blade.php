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
                    <span>Bảng thanh toán</span>
                </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body " style="display: block;">

                <table style="width:100%;">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Id khách hàng</th>
                            <th>Id Tour</th>
                            <th>Giá</th>
                            <th>Thời gian thanh toán</th>
                        </tr>
                        @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->user_id }}</td>
                            <td>{{ $payment->tour_id }}</td>
                            <td>{{ number_format($payment->price) }} đ</td>
                            <td>{{ date('d-m-Y', strtotime($payment->created_at)) }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $payments->links() }}
            </div>

        </div>
        <!-- box -->
    </div>
   
</div>
@endsection


