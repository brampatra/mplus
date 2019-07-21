@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <h3> Add a New Book </h3>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
{{--            <form method="post" action="{{ route('books.store') }}">--}}
                {!! Form::model($book, ['route' => 'books.store']) !!}
                <div class="form-group">
                    <label for="title">Title:</label>
                    {!! Form::text('title',  $book->title, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="author">Author :</label>
                    {!! Form::text('author',  $book->author, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="date_published">Date Published:</label>
                    {!! Form::date('date_published',  $book->date_published, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="number_of_pages">Number of Pages:</label>
                    {!! Form::text('number_of_pages',  $book->number_of_pages, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" class="form-control">
                        <option value="Novel">Novel</option>
                        <option value="Documentary">Documentary</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                {!! Form::close() !!}
        </div>
    </div>
@endsection