@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px;">
   
    <section>
        <h1 style="text-align:center;padding-bottom:10px"> Kết quả tìm kiếm tour du lịch</h1>
        <div class="container">
            @foreach($result as $tour)
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                    <div class="col-md-5 d-flex">
                        <img src="/storage/{{ $tour->tour_img ?? 'tour_1.jpg' }}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                        <h5 class="card-title"><a href="\tour-info\{{ $tour->id }}">{{ $tour->tour_name }}</a></h5>
                        <p class="card-text"><small class="text-muted">{{ $tour->tour_info }}</small></p>
                        <p>Giá: <span style="color:blue">{{ number_format($tour->price) }}</span> đ</p> 
                        <p>Số lượng còn lại: <span style="color:blue"> {{ $tour->quantity }}</span></p>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection


