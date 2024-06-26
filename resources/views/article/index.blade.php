<x-layout>
    <x-suggested/>
    
    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 p-2 mt-4">
                <x-card :article="$article"/>
            </div>
            @endforeach
        </div>
    </div>

    
</x-layout>