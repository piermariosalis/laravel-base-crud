@extends('layouts.app')

@section('content')
<h1> Posts</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>Created at</th>
            <th>Updated at</th>

        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id}}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->body}}</td>
            <td>{{ $post->created_at}}</td>
            <td>{{ $post->updated_at}}</td>
            <td>
            
                SHOW | EDIT | REMOVE

            </td>
        </tr>
    @endforeach
@endsection 
    </tbody>
</table>


