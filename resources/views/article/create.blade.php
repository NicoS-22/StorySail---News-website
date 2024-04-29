<x-layout>
    <x-header title="Crea il tuo annuncio" />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class=" p-5 form-template-1 border rounded-4" action="{{ route('article.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control lightBg" id="title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control lightBg" id="subtitle"
                            value="{{ old('subtitle') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control accentBg" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize lightBg">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="mb-3 mt-3">
                            <label for="tags" class="form-label">Tags: </label>
                            <input name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
                            <span class="small fst-italic mainTxt">Dividi ogni tag con una virgola</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" id="body" cols="30" class="form-control lightBg" rows="7">{{ old('body') }}</textarea>
                    </div>
                    <div>
                        <button class="btn  accentBg btnCus">Inserisci un articolo</button>
                        <a href="{{ route('home') }}" class="btn  accentBg btnCus">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
