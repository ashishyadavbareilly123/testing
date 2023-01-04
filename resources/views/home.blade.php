@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a class="btn btn-primary" href="{{ url('view_post') }}" style="width: 110px;margin-top: 20px;margin-left: 700px;">
                  Create Post
               </a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($postdata as $item)
                          <tr>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->body}}</td>
                            <td><a href = "{{url('edit-form',$item->id)}}" class = "btn btn-primary">Edit</a></td>
                            <td><a href = "{{url('delete-form',$item->id)}}" class = "btn btn-danger">Delete</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
