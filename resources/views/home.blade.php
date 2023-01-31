@extends('index')

@section('title', 'homepage')

@section('content')



    <h3>Post a Message</h3>
    <form action="/create" method="post">
    @csrf 
    <label name="title">Title :</label> <br>
    <input type="text" name="title" placeholder="Title of Text"> <br>
    <label name="content">Content :</label> <br>
    <input type="text" name="content" placeholder="Write your Tweet"> <br> <br>
    <button type="submit"> Submit</button>

    </form>

    <h3>Recent Messages</h3>

    <ul>


        @foreach($messages as $message)

        <li>
            <strong>{{ $message->title}}</strong>
             <br>
            {{  $message->content}} 
            <br>
            {{ $message->created_at->diffForHumans()}} 
            <!-- You can also use $message->created_at->format('d/m/Y H:i:s') --><br>
            <a href="/message/{{ $message->id }}"> View </a>
        </li>

        @endforeach

    </ul>

@endsection