@extends('layouts.adminLayout.admin_design')
@section('content')
    
 <div class="content">
  
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 col-md-12">
              <div class="card">
                <div id="table" class="card-header card-header-warning">
                  <h4 class="card-title">Subscribers Stats</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead >
                      <th>ID</th>
                     <th>Email</th>
                      <th>Operations</th>
                     
                    </thead>
                    <tbody>
                        @php
                            $count = 1
                        @endphp
                      @foreach ($subscribers as $subscriber)
                      <tr>
                      <td>{{$count++}}</td>
                      <td>{{$subscriber->emails}}</td>
                      <td>
                            <form action="{{ route('subscriber.destroy',$subscriber->id) }}" method="POST">
			            	@csrf
                              @method('DELETE')
				            <button type="submit" rel="tooltip" title="Delete Subscriber" class="btn btn-danger btn-link btn-sm"><i class="material-icons ">close</i></button>
				            </form>
                        <td>
                        
                      </tr>

                     @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
        </div>
 </div>
 @endsection