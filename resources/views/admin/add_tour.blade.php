@extends('admin.admin-header')

@section('contentS')
<div class="container">
    <form action="/admin" enctype="multipart/form-data" method="post">
        @csrf
        <h1 style="text-align:center">Thêm tour mới</h1>
        <div class="row">
            <div class="col-8 offset-2">

                <div class="form-group row">
                    <label for="tour_name" class="col-md-4 col-form-label text-md-right">Tên Tour</label>
    
                    <div class="col-md-6">
                        <input id="tour_name"
                            type="text"
                            class="form-control @error('tour_name') is-invalid @enderror" 
                            name="tour_name">
    
                        @error('tour_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">Giá</label>
    
                    <div class="col-md-6">
                        <input id="price"
                            type="text"
                            class="form-control @error('price') is-invalid @enderror" 
                            name="price">
    
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quantity" class="col-md-4 col-form-label text-md-right">Số lượng</label>
    
                    <div class="col-md-6">
                        <input id="quantity"
                            type="text"
                            class="form-control @error('quantity') is-invalid @enderror" 
                            name="quantity">
    
                        @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">Trạng thái tour</label>
    
                    <div class="col-md-6">
                        <input id="status"
                            type="text"
                            class="form-control @error('tour_name') is-invalid @enderror" 
                            name="status"
                            value="1"
                            >
    
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tour_img" class="col-md-4 col-form-label text-md-right">Ảnh Tour</label>
    
                    <div class="col-md-6">
                        <input id="tour-img"
                            type="file"
                            name="tour_img">
    
                        @error('tour_img')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pt-4">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-primary">Thêm Tour</button>
                    </div>
                </div>    
            </div>
        </div>
    </form>

</div>
@endsection
