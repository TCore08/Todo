@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>



                <div class="card-body">
                    
              <form action="{{route('save_post')}}" method="POST">
                @csrf
               <div class="form-group">
                    <label for="task">Task:</label>
                    <input type="text" class="form-control" placeholder="Enter task" name="task">
                    <input type="submit" name="submit" class="btn btn-dark" value="ADD TASK">
              </div>

              </form>


            <a href="/get_task" class="btn btn-primary">TASKS LIST</a>

            <a href="/create_profile/{id}" class="btn btn-primary">CREATE PROFILE</a>


                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
