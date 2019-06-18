@extends('layouts.app')

@section('content')
   <section id="white" class="padding">
        <div class="container">
             @include('inc.messages')
            <div class="row">
                 @include('inc.admin_left_nav')
                 <div class="col-md-8">
                        <form id="edit_category" action="{{ route('categories.update', $category->id) }}" method="POST" class="form-style my_account create-raffle" name="new_post">
                                @csrf
        @method('PUT')
                    <div class="title_section">
                        <label for="title">Category Name</label>
                    <input type="text" id="title" value="{{$category->category_name}}" tabindex="1" size="20" name="category_name">
                        </div>
                        <div class="description_section">
                        <label for="description">Category Description</label>
                        <textarea id="description" tabindex="3" name="category_description" cols="50" rows="3" placeholder="Start your description with the word “Win”, followed by a complete description of your prize." spellcheck="false">{{$category->category_description}}</textarea>
                        </div>
                        <button type="submit" value="Submit">Update Category</button>

                        </form>

                 </div>
            </div>
        </div>
   </section>            
@endsection