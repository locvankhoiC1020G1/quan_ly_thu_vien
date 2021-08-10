@extends('master')
@section('title','Home')
@section('content')
    <div id="templatemo_content_right">
        @foreach($books as $book)
        <div class="templatemo_product_box">
            <h1> <span>{{$book->name}}</span></h1>
            <img style="width: 100px;height: 150px" src="{{asset('storage/'.$book->image)}}" alt="image" />
            <div class="product_info">
                <p>{{$book->author}} </p>
                <h3>${{$book->price}}</h3>
                <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                <div class="detail_button"><a href="{{route('book.detail',$book->id)}}">Detail</a></div>
            </div>
            <div class="cleaner">&nbsp;</div>
        </div>
        @endforeach
     <a href="{{route('book.detail',$book->id)}}"><img src="{{asset('images/templatemo_ads.jpg')}}" alt="ads" /></a>
    </div>
@endsection
