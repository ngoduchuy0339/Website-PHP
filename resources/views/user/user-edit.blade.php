@extends('layouts.app')

@section('content')
<div class="container padding-content">
   <div class="row">
      <div class="col-8 offset-2">
            <div class="pt-1">
               <form action="/user/{{ $user->id }}" enctype="multipart/form-data" method="POST">
                  @csrf
                  @method('PATCH')

                  <h1 style="text-align:center">Chỉnh sửa thông tin</h1>

                  <div class="form-group row">
                     <label for="name" class="col-md-4 col-form-label text-md-right">Tên</label>

                     <div class="col-md-6">
                        <input id="name"
                        type="name"
                        class="form-control"
                        name="name"
                        value="{{ old('name') ?? $user->name }}">
                     </div>

                     @error('name')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>

                  <div class="form-group row">
                     <label for="avatar" class="col-md-4 col-form-label text-md-right">Ảnh đại diện</label>
      
                     <div class="col-md-6">
                           <input id="avatar"
                              type="file"
                              name="avatar"
                              value="null">
      
                           @error('avatar')
                              <p><strong>{{ $message }}</strong></p>
                           @enderror
                     </div>
                  </div>

                  <div class="form-group row pt-4">
                     <div class="col-md-4"></div>
                     <div class="col-md-6">
                           <button class="btn btn-primary">Lưu thông tin</button>
                     </div>
                  </div>   
               </form>      
            </div>
      </div>
   </div>
</div>
@endsection