<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>TraoCar</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('addCategory') }}">Add Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showCarLists') }}">Boutique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('addCar') }}">Add car</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="p-5" style="display: flex; align-items: start; justify-content: center">
            <div class=" container col-md-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Browse</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $key)

                        <tr>
                            <td><a style="text-decoration:none; color:black" href="{{route('showCategory',['id'=>$key['id']])}}">{{ $key->name }}</a></td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
            <div class=" container col-md-10">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
