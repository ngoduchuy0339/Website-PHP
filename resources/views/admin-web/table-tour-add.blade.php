@extends('admin-web.index')

@section('content-admin')
<div class="row">
    <!-- Container Begin -->
    <div class="row" style="margin-top:-20px">
        <h3 style="text-align:center"> Thay đổi thông tin tour</h3>
            <div class="small-11 small-centered columns">
                <form data-abide method="POST" class="d-flex" action="{{ route('admin_tour_add_post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="name-field large-6 columns">
                        <label>Tên Tour <small>Bắt buộc</small>
                            <input name="tour_name" type="text" pattern="[a-zA-Z]+">
                        </label>
                        <small class="error">Tên Tour phải là chuỗi.</small>
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Giá <small>Bắt buộc</small>
                            <input name="price" type="text" pattern="[0-9]+">
                        </label>
                        <small class="error">Giá phải là chữ số.</small>
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Số lượng <small>Bắt buộc</small>
                            <input name="quantity" type="text" pattern="[0-9]+">
                        </label>
                        <small class="error">Số lượng phải là chữ số.</small>
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Thông tin
                            <input name="tour_info" type="text" pattern="[a-zA-Z]+">
                        </label>
                        {{-- <small class="error">Thông tin phải là chuỗi.</small> --}}
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Ảnh <small>Bắt buộc</small>
                            <input name="tour_img" type="file">
                        </label>
                        <small class="error">File định dạng ảnh.</small>
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Thành phố xuất phát
                            <input name="city_start" type="text" pattern="[a-zA-Z]+">
                        </label>
                        {{-- <small class="error">Thành phố xuất phát phải là chuỗi.</small> --}}
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Ngày bắt đầu
                            <input name="date_start" type="date">
                        </label>
                        {{-- <small class="error">Ngày bắt đầu định dạng là ngày.</small> --}}
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Số ngày đi
                            <input name="date_duration" type="text" pattern="[0-9]+">
                        </label>
                        {{-- <small class="error">Thành phố xuất phát phải là chuỗi.</small> --}}
                    </div>
                    <div class="name-field large-6 columns">
                        <label>Trạng thái
                            <select name="status">
                                <option value="1">Hoạt động</option>
                                <option value="0">Ngưng hoạt động</option>
                            </select>
                        </label>
                    </div>
                    <div class="name-field large-6 columns">
                        <button type="submit" class=" radius button bg-red" name="submit" style="padding:15px;">Thêm</button>
                    </div>
                </form>

    </div>
</div>
@endsection


