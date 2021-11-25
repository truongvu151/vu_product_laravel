@extends('layout')
@section('content')
<!--Product-->
<div class="container-sm p-3 my-3 border">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="productdetail">
                        Mã sản phẩm: {{$product->ProductId}} <br>
                        Tên sản phẩm: {{$product->ProductName}} <br>
                        Đơn vị tính: {{$product->Unit}} <br>
                        Đơn giá: @php echo number_format($product->Price); @endphp <br>
                    </div>
                </div>
                <div class="card-body">
                    <a href="" class="card-link">
                        <img class="card-img-center" src="images/{{$product->Img}}" height="150px">
                    </a>
                </div>
                <!-- <div class="card-footer"></div> -->
            </div>
        </div>
    </div>
</div>
@stop