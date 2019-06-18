@extends('layouts.app')

@section('content')
   <section id="white" class="padding">
        <div class="container">
             @include('inc.messages')
            <div class="row">
                 @include('inc.admin_left_nav')
                 <div class="col-md-8">
         
                    <h1>Categories</h1>
                 <a href="{{ route('categories.create') }}" class="btn round light-green text-white float-right"> <i class="material-icons">add</i> </a><br><br>
                        @if (count($categories) > 0)
                    <table class="table table-bordered table-striped">
                         <tr>
                              <th>Category Name</th>
                              <th>Edit</th>
                              <th>Delete</th>
                         </tr>
                         @foreach ($categories as $category)
                              <tr>
                              <td>{{$category->category_name}}</td>
                              <td><a href="/categories/{{$category->id}}/edit" class="btn round orange text-white"><i class="material-icons">edit</i></a></td>
                              <td><a class="btn round red text-white"><i class="material-icons">delete</i></a></td>
                              </tr>
                         @endforeach
                    </table>
                        @endif
                 </div>
            </div>
        </div>
   </section>            
@endsection