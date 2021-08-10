@extends('master')
@section('title','Detail')
@section('content')
    <div id="templatemo_content_right">
        <h1><span>{{$book->name}}</span></h1>
        <div class="image_panel"><img src="{{asset('storage/'.$book->image)}}" alt="CSS Template" width="100" height="150" /></div>
        <h2>Read the lessons - Watch the videos - Do the exercises</h2>
        <ul>
            <li>By Deke <a href="#">{{$book->author}}</a></li>
            <li>January 2024</li>
            <li>Pages: 498</li>
            <li> Price:${{$book->price}}</li>
            <li>ISBN 10: 0-496-91612-0 | ISBN 13: 9780492518154</li>
        </ul>

        <p>{{$book->description}}</p>



        <div class="cleaner_with_height">&nbsp;</div>

        <a href="index.html"><img src="{{asset('images/templatemo_ads.jpg')}}" alt="css template ad" /></a>

    </div> <!-- end of content right -->

    <div class="cleaner_with_height">&nbsp;</div>
    </div>
    </div>
@endsection
