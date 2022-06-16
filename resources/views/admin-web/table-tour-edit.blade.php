@extends('admin-web.index')

@section('content-admin')
<div class="row">
    <!-- Container Begin -->
    <div class="row" style="margin-top:-20px">
        <h3 style="text-align:center"> Thay đổi thông tin tour</h3>
        <div class="small-11 small-centered columns">
            <form data-abide class="d-flex" action="admin/table/tour/{{ $tour->id }}" enctype="multipart/form-data" method="POST" >
                @csrf
                @method('PATCH')

                <div class="name-field large-6 columns">
                    <label>Tên Tour <small>Bắt buộc</small>
                        <input name="tour_name" type="text" pattern="[a-zA-Z]+" value="{{ $tour->tour_name }}">
                    </label>
                    <small class="error">Tên Tour phải là chuỗi.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Giá <small>Bắt buộc</small>
                        <input name="price" type="text" pattern="[0-9]+" value="{{ $tour->price }}">
                    </label>
                    <small class="error">Giá phải là chữ số.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Số lượng <small>Bắt buộc</small>
                        <input name="quantity" type="text" pattern="[0-9]+" value="{{ $tour->quantity }}">
                    </label>
                    <small class="error">Số lượng phải là chữ số.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Thông tin <small>Bắt buộc</small>
                        <input name="tour_info" type="text" pattern="[a-zA-Z]+" value="{{ $tour->tourInfo->tour_info }}">
                    </label>
                    <small class="error">Thông tin phải là chuỗi.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Ảnh <small>Bắt buộc</small>
                        <input name="tour_img" type="file"  value="{{ $tour->tourInfo->tour_img }}">
                    </label>
                    <small class="error">File định dạng ảnh.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Thành phố xuất phát <small>Bắt buộc</small>
                        <input name="city_start" type="text" pattern="[a-zA-Z]+" value="{{ $tour->tourInfo->city_start }}">
                    </label>
                    <small class="error">Thành phố xuất phát phải là chuỗi.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Ngày bắt đầu <small>Bắt buộc</small>
                        <input name="date_start" type="date" value="{{ $tour->tourInfo->date_start }}">
                    </label>
                    <small class="error">Ngày bắt đầu định dạng là ngày.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Số ngày đi <small>Bắt buộc</small>
                        <input name="date_duration" type="text" pattern="[0-9]+" value="{{ $tour->tourInfo->date_duration }}">
                    </label>
                    <small class="error">Thành phố xuất phát phải là chuỗi.</small>
                </div>
                <div class="name-field large-6 columns">
                    <label>Trạng thái
                        <select name="status">
                            @if($tour->status == 1)    
                                <option value="{{ $tour->status }}">Hoạt động</option>
                                <option value="0">Ngưng hoạt động</option>
                            @else
                                <option value="{{ $tour->status }}">Ngưng hoạt động</option>
                                <option value="0">Hoạt động</option>
                            @endif    
                        </select>
                    </label>
                </div>
                <div class="name-field large-6 columns">
                    <button type="submit" class=" radius button bg-red" name="submit" style="padding:15px;">Chỉnh sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


