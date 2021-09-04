<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>My Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary" role="button">Add New Post</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary" role="button">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a>
                        @endif
                    @endauth
                    
                </div>
            @endif
        </div>
      </header>

      

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark bg-gradient">
            <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Fantasy Blog</h1>
            <p class="lead my-3 fw-lighter">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            </div>
        </div><br/>

        <div class="row mb-2">
            @foreach ($posts as $post )
                
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                            <div class="card-body d-flex flex-column align-items-start ">
                                <strong class="d-inline-block mb-2 text-primary"><h3 class="mb-0">{{ $post->title }}</h3></strong>
                                
                                <div class="mb-1 text-muted">By : {{ $post->name }}</div>
                                <p class="card-text mb-auto overflow-hidden">{{ $post->description }}</p>
                                <a href="{{ route('continue_reading',$post->id) }}">Continue reading</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" src="{{ asset('images/'.$post->image) }}" alt="Card image">
                        </div>
                    </div>
                    
                
                
            @endforeach
        </div>
        
    </div>

    

    <footer id="blog_footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
