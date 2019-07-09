@extends('layouts.adminLayout.admin_design')
@section('content')
    
 <div class="content">
  
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 col-md-12">
              <div class="card">
                <div id="table" class="card-header card-header-warning">
                  <h4 class="card-title">Users Stats</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead >
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Operations</th>
                      <th>Order Detail</th>
                    </thead>
                    <tbody>
                      @php
                          $count = 1;
                      @endphp
                      @foreach ($users as $user)
                      <tr>
                      <td>{{$count++}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td><a href="{{route('show-user', $user->id)}}" rel="tooltip" title="View" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">border_color</i>
                      </a>
                             
                        <td>
                        <a href="{{route('order-details',$user->id)}}" rel="tooltip" title="Order Detail" class="btn btn-success btn-link btn-sm">
                                <i class="fa fa-database" aria-hidden="true"></i>
                            </a>
                        </td>

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