@extends('layouts.app')

@section('content')
<div class="container padding-content">
   <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
         <div class="col-6 d-flex">
            <div class="col-5">
               <img src="/storage/{{ $user->avatar }}" alt="broke" class="rounded-circle " style="width:160px;height:160px">
            </div>
            <div class="col-7">
               <h5 class="" style="padding-top:30px">{{ $user->name }}</h5>
               <a href="user/{{ $user->id }}/edit"><p class="color:#f0f0f0 pt-1"><i class="material-icons">create</i> Chỉnh sửa</p></a>
            </div>
         </div>
         <div class="col-6"> 
         </div>
      <div class="col-1"></div>
      {{-- <h1 class="text-center">Tour yêu thích</h1> --}}
      
   </div>
</div>
@endsection