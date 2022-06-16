@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px;">
    {{-- Thumb --}}
    <section>
        <h1 style="text-align:center;padding-bottom:10px"> {{ $tour->tour_name }}</h1>
        <div class="row">
            {{-- Big --}}
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div class="card" style="width:100%;">
                    <img class="card-img-top" src="/storage/{{ $tour->tourInfo->tour_img ?? 'tour_1_info.jpg' }}" alt="Card image">
                    <div class="card-img-overlay">
                        {{-- favorite --}}
                        <a href="#"><i id="fav"class="material-icons" style="font-size:48px;color:white">&#xe87e;</i></a>
                    </div>
                </div>
            </div>
            {{-- Small --}}
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h3>Đánh giá</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <p>Thời gian khởi hành</p>
                            <p>Thời gian chuyến đi</p>
                            <p>Nơi khởi hành</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <p><span style="font-weight:bold;color:hotpink">{{ date('d-m-Y', strtotime($tour->tourInfo->date_start)) }}</span></p>
                            <p><span style="font-weight:bold;color:hotpink">{{ $tour->tourInfo->date_duration }}</span> ngày</p>
                            <p><span style="font-weight:bold;color:hotpink">{{ $tour->tourInfo->city_start }}</span></p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <p><span style="font-weight:bold;color:hotpink">{{ number_format($tour->price) }}</span> đ</p> 
                            <p>Số chỗ còn nhận<span style="font-size:20px;font-weight:bold;color:hotpink"> {{ $tour->quantity }}</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                </div>

                <div class="container" style="">
                    <form action="{{ route('tour_booking_add') }}" enctype="multipart/form-data" method="POST" data-abide>
                        @csrf
                        @method('PATCH')
                        <button type="submit"name="submit"class="btn btn-primary" style="background-color:#f9ab30; color:white;border:none;vertical-align:middle;" >
                            Đặt ngay
                        </button>    
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    {{-- Info down --}}
</div>
@endsection
