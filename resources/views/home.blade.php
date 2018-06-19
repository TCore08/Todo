@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              <form action="{{route('save_post')}}" method="POST">
                @csrf
               <div class="form-group">
                    <label for="title">Task:</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                    <input type="submit" name="submit" value="+">
              </div>
              </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
