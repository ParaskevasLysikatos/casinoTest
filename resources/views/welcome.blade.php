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
        .abs,
h2:after,
.cards .card figcaption,
.cards .card:after,
.news .card figcaption,
.news .card:after,
.news .article figcaption {
  position: absolute;
}
.rel,
h2,
h2 strong,
.cards .card,
.news .card,
.news .article {
  position: relative;
}
.fix {
  position: fixed;
}
.dfix {
  display: inline;
}
.dib {
  display: inline-block;
}
.db {
  display: block;
}
.dn {
  display: none;
}
.df,
.cards,
.news {
  display: flex;
}
.dif {
  display: inline-flex;
}
.dg {
  display: grid;
}
.dig {
  display: inline-grid;
}
.vm,
h2,
h2 strong,
h2 span {
  vertical-align: middle;
}
body {
  background: #24282f;
  font-family: 'Alegreya Sans';
}
.wrapper {
  padding: 15px;
}
h2 {
  padding: 10px;
  padding-left: 25px;
  color: #ccc;
  margin: 0;
}
h2 strong {
  z-index: 2;
  background: #24282f;
  padding: 4px 8px;
}
h2 span {
  font-size: 0.7em;
  color: #aaa;
  margin-left: 10px;
}
h2:after {
  content: '';
  z-index: 1;
  bottom: 50%;
  margin-bottom: -2px;
  height: 2px;
  left: 0;
  right: 0;
  background: #373d47;
}
.cards,
.news {
  flex-flow: row wrap;
}
.cards .card,
.news .card {
  margin: 20px;
  width: 180px;
  height: 270px;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0,0.8);
  transform-origin: center top;
  transform-style: preserve-3d;
  transform: translateZ(0);
  transition: 0.3s;
}
.cards .card img,
.news .card img {
  width: 100%;
  min-height: 100%;
}
.cards .card figcaption,
.news .card figcaption {
  bottom: 0;
  left: 0;
  right: 0;
  padding: 20px;
  padding-bottom: 10px;
  font-size: 20px;
  background: none;
  color: #fff;
  transform: translateY(100%);
  transition: 0.3s;
}
.cards .card:after,
.news .card:after {
  content: '';
  z-index: 10;
  width: 200%;
  height: 100%;
  top: -90%;
  left: -20px;
  opacity: 0.1;
  transform: rotate(45deg);
  background: linear-gradient(to top, transparent, #fff 15%, rgba(255,255,255,0.5));
  transition: 0.3s;
}
.cards .card:hover,
.news .card:hover,
.cards .card:focus,
.news .card:focus,
.cards .card:active,
.news .card:active {
  box-shadow: 0 8px 16px 3px rgba(0,0,0,0.6);
  transform: translateY(-3px) scale(1.05) rotateX(15deg);
}
.cards .card:hover figcaption,
.news .card:hover figcaption,
.cards .card:focus figcaption,
.news .card:focus figcaption,
.cards .card:active figcaption,
.news .card:active figcaption {
  transform: none;
}
.cards .card:hover:after,
.news .card:hover:after,
.cards .card:focus:after,
.news .card:focus:after,
.cards .card:active:after,
.news .card:active:after {
  transform: rotate(25deg);
  top: -40%;
  opacity: 0.15;
}
.news .article {
  overflow: hidden;
  width: 350px;
  height: 235px;
  margin: 20px;
}
.news .article img {
  width: 100%;
  min-height: 100%;
  transition: 0.2s;
}
.news .article figcaption {
  font-size: 14px;
  text-shadow: 0 1px 0 rgba(51,51,51,0.3);
  color: #fff;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  padding: 40px;
  box-shadow: 0 0 2px rgba(0,0,0,0.2);
  background: rgba(6,18,53,0.6);
  opacity: 0;
  transform: scale(1.15);
  transition: 0.2s;
}
.news .article figcaption h3 {
  color: #3792e3;
  font-size: 16px;
  margin-bottom: 0;
  font-weight: bold;
}
.news .article:hover img,
.news .article:focus img,
.news .article:active img {
  filter: blur(3px);
  transform: scale(0.97);
}
.news .article:hover figcaption,
.news .article:focus figcaption,
.news .article:active figcaption {
  opacity: 1;
  transform: none;
}

    </style>
</head>
<nav class="navbar navbar-light bg-dark justify-content-around">
    <span style="color:white;" class="navbar-text">
        Navbar for searching casino games
    </span>
    <form style="width:70%;" class="form-inline" action="{{ route('welcome') }}" method="GET">
        @csrf
        <input style="width:40%;" class="form-control mr-sm-2" type="search" name="search"
            value="{{ Request::get('/') }}" placeholder="Search a casino game name" aria-label="Search">
        <button style="width:20%;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<body class="antialiased">

    <form style="border: 3px solid #aaa;padding: 5px;border-radius: 9px;width:90%;"
        class="row d-flex justify-content-start m-3" action="{{ route('welcome') }}">
        @csrf
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
