@extends('layouts.app')

@section('content')
<head>
 <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
              var id = $(this).data('id')
               $("#str"+id).css('text-decoration', 'line-through');
            }
            else if($(this).prop("checked") == false){
                  $("#str"+id).css('text-decoration', 'none');
                             }
        });
    });
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
</head>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
           <center>  <h1>Task List</h1> </center>
                           <table>
                                    <tr>
                                          <th><h3>Tasks</h3></th>
                                          <th><h3>Status</h3></th>
                                    </tr>

                                     @foreach ($tasks as $todo)

                                     <tr>
                                      
                                       
                                       <td><input type="checkbox" data-id="{{$todo->id}}" value="Completed"><br></td>
                                      
                                       <td id="str{{$todo->id}}">{{$todo->task}}</td>

                                      </tr>

                                      @endforeach

                           </table>

                          

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

