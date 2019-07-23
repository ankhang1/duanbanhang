@extends('layouts.master')
@section('title')
Trang quản trị hệ thống
@endsection
@section('content')
<?php
        $hoten=" <b>Trinh Duong An Khang </b>";
        $gioitinh=0;
?>

    Gia trị của họ tên là: {{ $hoten }} <br>
    Gia trị của họ tên no escape là : {!! $hoten !!} <br>
    Gia trị của họ tên là : @{{ $hoten }}
    @if($gioitinh==0)
    {
        {{ 'Nam' }}
    }
    @elseif($giotinh==1)
    {
        {{ 'Nữ'}}
    }
    @else
    {
        {{'Không xác định'}}
    }
    @endif
@endsection