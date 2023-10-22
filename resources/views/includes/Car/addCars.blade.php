@if (session('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message success </strong> <br>{{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>

    </div>

@endif

@if (session('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Message success </strong> <br>{{ session('error') }}
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

<div class="add">
    <form method="POST" action="{{route('sendCarAdd')}}" enctype="multipart/form-data">
        @csrf
        <div class="field__form">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Car picture</label>
                <input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="row">
                <div class="col">
                    <label for="year">Titre</label>
                    <textarea name="name" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="year">Prix</label>
                    <input type="number" name="price">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="year">Détails</label>
                    <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="field"> 
                <select class="form-select" aria-label="Default select example" name="category_id">
                   <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="btn__form">
            <button>Save</button>
        </div>  
    </form>  
</div>