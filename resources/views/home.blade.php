@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach ($errors->all() as $error )
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>

                    @endforeach

                    <form method="POST" action="{{ route('add_post') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Post Title</label><br/>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                        </div>
                        <br/>
                        
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label><br/>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description"></textarea>
                        </div><br/>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Upload Image</label><br/>
                            <input class="form-control" name="image" type="file"/>
                          </div><br/>
                        <button type="submit" class="btn btn-info" >Post</button>
                     </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
