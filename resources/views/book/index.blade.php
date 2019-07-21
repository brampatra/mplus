@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Author</td>
                <td>Date Published</td>
                <td>Number of Pages</td>
                <td>Type</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($shares as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->title}}</td>
                    <td>{{$share->author}}</td>
                    <td>{{$share->date_published}}</td>
                    <td>{{$share->number_of_pages}}</td>
                    <td>{{$share->type}}</td>
                    <td><a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection