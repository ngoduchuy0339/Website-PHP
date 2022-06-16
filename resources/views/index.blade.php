
@extends('layouts.app')

@section('content')
{{-- Header --}}
<div style="height:800px; position:relative">
    <div id="header" class="hero-image" style="background-image: linear-gradient(rgba(0, 255, 0, 0.1), rgba(0, 0, 255, 0.5)), url('img/brand/bg_2.jpg');">
        <div class="hero-text text-center">
            <h1>Road Trip</h1>
            <p>Du lịch vòng quanh thế giới cùng với chúng tôi</p>
        </div>
        <div class="hero-div-bottom row" style="height:12%;border-radius:5px">
            <form class="d-flex" method="GET" style="width:100%;">
                
                <div class="col-3 hero-part" style="width:50px;">
                    <label>Thành Phố</label><br>
                    <select name="city" class="form-control-sm" name="city_start" style="width:50%">
                            <option disabled selected value> Tên thành phố </option>
                            <option value="Đà Nẵng"> Đà Nẵng </option>
                    </select>
                </div>
                <div class="col-3 hero-part">
                    <label>Ngày xuất phát</label><br>
                    <input type="date" name="date_start" style="border-radius:2px">
                </div>
                <div class="col-3 hero-part">
                    <label>Giá</label><br>
                    <select name="city"class="form-control-sm"name="price"style="width:50%">
                        <option disabled selected value> Giá </option>
                        <option value="3000000"> {{ number_format(3000000) }} đ</option>
                    </select>
                </div>
                <div class="col-3 hero-part">
                    <div  style="padding:25px;">
                    <button type="submit" class="btn btn-search btn-warning" style="color:white;font-size:large">Tìm kiếm</button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>     
        </div>
    </div>
</div>

<div class="container">
    {{-- Tour yêu thích --}}
    <section style="padding-top:100px;">
        <h1 style="text-align:center">Tour mới cập nhật</h1>
        <div class="row" style="padding-top:50px;">

            @for($i = 0; $i < 4; $i++)
                <div class="col-3 d-flex align-items-stretch"style="width:100%;heigth:100%">
                    <div class="card" style="width:100%;heigth:100%">
                        <a href="\tour-info\{{ $tour[$i]->id }}">
                            <img class="card-img-top" src="storage/{{ $tour[$i]->tour_img }}" alt="Card image" style="width:100%;height:180px">
                        </a>    
                        <div class="card-body">
                            <h4 class="card-title">
                                 {{ $tour[$i]->tour_name ?? 'error' }}
                            </h4>
                            <p class="card-text">Giá: <span style="color:blue">{{ number_format($tour[$i]->price) }} đ</span></p>
                            <p class="card-text">Số lượng còn lại: <span style="color:blue">{{ number_format($tour[$i]->quantity) }}</span> </p>
                            <a href="\tour-info\{{ $tour[$i]->id }}" class="btn btn-primary">Thông tin</a>
                        </div>
                    </div>
                </div>
            @endfor   

        </div>
    </section>

    {{-- Tour ưu đãi --}}
    <section style="padding-top:50px">
        <h1 style="text-align:center">Tour hiện có</h1>
        <div class="container">
            <div class="row" style="padding-top:50px;">

                @foreach($tours as $tour)
                    <div class="col-4 d-flex align-items-stretch"style="width:100%;heigth:100%">
                        <div class="card" style="width:100%;heigth:100%">
                            <a href="\tour-info\{{ $tour->id }}">
                                <img class="card-img-top" src="storage/{{ $tour->tour_img ?? error }}" alt="Card image" style="width:100%;height:180px">
                            </a>    
                            <div class="card-body">
                                <h4 class="card-title">
                                        {{ $tour->tour_name ?? 'error' }}
                                </h4>
                                <p class="card-text">Giá: <span style="color:blue">{{ number_format($tour->price) }} đ</span></p>
                                <p class="card-text">Số lượng còn lại: <span style="color:blue">{{ number_format($tour->quantity) }}</span></p>
                                <a href="\tour-info\{{ $tour->id }}" class="btn btn-primary">Thông tin</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div style="padding:20px">   
            {{ $tours->links() }}  
            </div>
        </div>
    </section>  
</div>
@endsection
