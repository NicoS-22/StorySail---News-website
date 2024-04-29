<x-layout>
    <x-header title="Categoria : {{ $category->name }}" />
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
