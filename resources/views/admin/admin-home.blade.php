@extends('admin.admin-header')

@section('contentS')
<div class="container">
    {{ $data->email ?? 'NULL' }}
    <a href="{{ route('admin_logout') }}">log Out</a>
</div>
@endsection