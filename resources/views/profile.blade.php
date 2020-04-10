<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="col-12 my-3 pt-3 shadow">
                   <img src="{{ $user->image->url }}" alt="" class="float-left rounded-circle">
                   <h1> {{ $user->name }}</h1>
                   <h3> {{ $user->email }}</h3>
                   <p>
                       <strong>Instagram</strong> : {{ $user->profile->instagram }} <br>
                       <strong>Github</strong> : {{ $user->profile->github }} <br>
                       <strong>Web</strong> : {{ $user->profile->web }} <br>
                   </p>
                   <p>
                    <strong>Pais</strong> {{ $user->location->country }}
                   </p>
                   <p>
                       <strong>Level</strong> 
                       @if($user->level)
                        <a href="#">{{ $user->level->name }}</a> 
                       @else
                        ---
                       @endif  <br>  
                   </p>
                   <hr>
                   <p>
                       <strong>Grupos</strong>
                        @forelse ($user->groups as $group)
                            <span class="badge badge-primary">{{ $group->name }}</span>
                        @empty
                            <em>No pertenece a ningun grupo</em>
                        @endforelse
                    </p>
               </div>
           </div>
       </div>
    </body>
</html>
