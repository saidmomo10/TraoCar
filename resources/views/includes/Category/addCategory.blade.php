
<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>AJOUTER UNE CATEGORIE</h2>
            </div>
            @if (session('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message success </strong> <br>{{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
        
                </div>
    
            @endif
    
            @if (session('error'))
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Message </strong> <br>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
        
            @endif
        
            @if ($errors->any())
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li><br />
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
        
            @endif
            <div class="mt-3">
                <form method="POST" action="{{route('createCategory')}}">
                    @csrf
                    <div class="field"> 
                        <input type="text" name="name">    
                    </div>
                    <div class="btn__form">
                        <button class="btn btn-primary mt-3">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


