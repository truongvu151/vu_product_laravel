@extends('layout')
@section('content')
<!--Product-->
<div class="container-sm p-3 my-3">
    <div class="row">
        @foreach($product as $p)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('prodetail', ['ProductId'=>$p->ProductId])}}" class="card-link">{{$p -> ProductName}}</a>
                </div>
                <div class="card-body">
                    <a href="{{route('prodetail', ['ProductId'=>$p->ProductId])}}" class="card-link">
                        <img class="card-img-center" src="images/{{$p->Img}}" height="150px">
                    </a>
                </div>
                <div class="card-footer">
                    @php echo number_format($p->Price); @endphp
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop