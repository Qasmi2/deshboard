@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Record</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('flash-message')
                      <!-- javaScript delete confirmation -->
                      <script>
                                $(document).ready(function() {
                                $('a[data-confirm]').click(function(ev) {
                                var href = $(this).attr('href');
                                if (!$('#dataConfirmModal').length) {
                                $('body').append('<div id="dataConfirmModal" class="modal fade modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog "><div class="modal-content"><div class=" modal-header" style="text-align:center;display:flow-root !important;color:white;background-color: red;" ><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" >Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-danger" id="dataConfirmOK">Delete</a></div></div></div></div>');
                                } 
                                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                                $('#dataConfirmOK').attr('href', href);
                                $('#dataConfirmModal').modal({show:true});
                                return false;
                                    });
                            });
                        </script>
                     <script>
                                    $(document).ready(function(){
                                    $("#myInput").on("keyup", function() {
                                        var value = $(this).val().toLowerCase();
                                        $("#myTable tr").filter(function() {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                        });
                                    });
                                    });
                            </script>    
                        <!-- End JavaScript code -->

                    <?php 
                         $view = sizeof($views);
                    ?>
                     <div class="container">
                      <div class="row">
                         <input id="myInput" type="text" class="form-control" placeholder="Search..">
                       </div>
                    </div>     
                    <br>   
                    {{$views->links()}}                  
                     <table class="table table-bordered table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                               <th>Name</th>
                               <th>CNIC NUMBER</th>
                               <th>PTCL NUMBER</th>
                               <th>CELL NUMBER</th>
                               <th>Actions</th>
                               
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @for($i=0; $i < $view ; $i++)
                                <tr>
                                    
                                    <td>{{$views[$i]['name']}}</td>
                                    <td>{{$views[$i]['identity']}}</td>
                                    <td>{{$views[$i]['ptclNO']}}</td>
                                    <td>{{$views[$i]['mobileNo']}}</td>
                                    
                                    <td><a href="{{ url('edit/'.$views[$i]['id'])}}"> Edit</a>
                                        
                                        <a href="{{ url('delete/'.$views[$i]['id']) }}" data-confirm="Are you sure you want to delete?" class="btn btn-lg btn-danger ">Delete</a>
                                       
                                    </td>
                                   
                                </tr>
                            @endfor
                            
                        </tbody>
                    </table>
                    {{$views->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection