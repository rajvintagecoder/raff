@extends('layouts.adminLayout.admin_design')
@section('content')
    
 <div class="content">
         <div class="container-fluid">
            <div class="row">
                {{$orders}}
            </div>
        </div>
 </div>
 @endsection