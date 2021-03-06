@extends('layouts.app')

@section('content')
    <div class="row pl-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>POST CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}" title="Create a post"> 
                    <i class="fas fa-plus-circle">CREATE</i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered ml-5 mt-3">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>

                <td>{{ date_format($post->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

                        <a href="{{ route('posts.show', $post->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg">Show</i>
                        </a>

                        <a href="{{ route('posts.edit', $post->id) }}">
                            <i class="fas fa-edit  fa-lg">Edit</i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">Delete</i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->links() !!}

@endsection