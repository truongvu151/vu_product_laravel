@extends('layout')
@section('content')
<!--Product-->
<div class="container">
    <h2 style="text-align: center;">Danh sách sản phẩm</h2>
    <table class="table table-striped">
        <tr>
            <th>Mã SP</th>
            <th>Tên sản phẩm</th>
            <th>Đơn vị tính</th>
            <th>Đơn giá</th>
            <th>Loại sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th></th>
        </tr>
        @foreach($product as $p)
        <tr>
            <td>{{$p->ProductId}}</td>
            <td>{{$p->ProductName}}</td>
            <td>{{$p->Unit}}</td>
            <td>{{$p->Price}}</td>
            <td>{{$p->Category->CategoryName}}</td>
            <td>
                <img src="images/{{$p->Img}}" width=50 height=50>
            </td>
            <td>
                <a href="{{route('proddel', ['ProductId' => $p->ProductId])}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$product->links()}}
</div>
@stop