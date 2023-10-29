<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link href="{{ asset('/welcome.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        select {
            margin-bottom: 1%;
            margin-top: 1%;
            font-family: cursive, sans-serif;
            outline: 0;
            background: #373d47;
            color: #fff;
            border: 3px solid #aaa;
            padding: 1%;
            border-radius: 9px;
        }
    </style>
</head>
<nav class="navbar navbar-light bg-dark justify-content-around">
    <span style="color:white;" class="navbar-text">
        Navbar for searching casino games
    </span>
    <form style="width:70%;" class="form-inline" action="{{ route('welcome') }}" method="GET">
        <input style="width:40%;" class="form-control mr-sm-2" type="search" name="search"
            value="{{ Request::get('/') }}" placeholder="Search a casino game name" aria-label="Search">
        <button style="width:20%;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<body class="antialiased">

    <form style="border: 3px solid #aaa;padding: 5px;border-radius: 9px;width:90%;"
        class="row d-flex justify-content-start m-3" action="{{ route('welcome') }}">
        <div class="col-2">

            <label>Categories</label>
            <select name="categories">
                <option value="" >Not chosen</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->title }}" @if(Request::get('categories')== $cat->title) selected @endif> {{ $cat->title }}</option>
                @endforeach
            </select>

        </div>

        <div class="col-3">

            <label>Themes</label>
            <select name="themes">
                <option value="" @if(Request::get('themes')=='') selected @endif>Not chosen</option>
                @foreach ($themes as $thm)
                    <option value="{{ $thm->title }}"  @if(Request::get('themes')== $thm->title) selected @endif> {{ $thm->title }}</option>
                @endforeach
            </select>

        </div>

        <div class="col-3">

            <label>Features</label>
            <select name="features" style="margin-bottom:10%;">
                <option value="" @if(Request::get('features')=='') selected @endif>Not chosen</option>
                @foreach ($features as $feat)
                    <option value="{{ $feat->title }}"  @if(Request::get('features')== $feat->title) selected @endif> {{ $feat->title }}</option>
                @endforeach
            </select>
        </div>

        <div  class="col-2 ml-3">
            <button  class="btn btn-success" type="submit">Search with filters</button>
        </div>

    </form>


    <div class="wrapper">

        <h2><strong>All Games<span>( {{ $casino_games->count() }} )</span></strong></h2>

        <div class="cards">

            @foreach ($casino_games as $element)
                <figure class="card">

                    <img src="{{ $element->icon_2 }}" alt="{{ $element->background }}" />

                    <figcaption>{{ $element->name }}</figcaption>

                </figure>
            @endforeach

        </div>

        <h2><strong>What's new? <span>( {{ $new_games->count() }} )</span></strong></h2>

        <div class="news">

            {{-- @php
                dd($new_games[0]->categories)
            @endphp --}}

            @foreach ($new_games as $new)
                <figure class="article">

                    <img src="{{ $new->icon_2 }}" alt="{{ $new->background }}" />

                    <figcaption>

                        <h3>{{ $new->name }}</h3>

                        <p>

                            New updates by {{ $new->provider_title }}

                        </p>

                    </figcaption>

                </figure>
            @endforeach

        </div>

    </div>


</body>

</html>
