<h1>AJOUTER UNE VOITURE</h1>
<hr>

<div class="add">
    <form method="POST" action="{{route('sendCarAdd')}}" enctype="multipart/form-data">
        @csrf
        <div class="field__form">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Choisissez une image</label>
                <input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="row" style="align-items: center">
                <div class="col">
                    <label for="year">Titre</label>
                    <textarea name="name" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col">
                    <label for="year">Prix</label>
                    <input type="number" name="price">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <label for="year">Détails</label>
                    <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="field mt-4"> 
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
            <button class="btn btn-primary mt-5">Save</button>
        </div>  
    </form>  
</div>