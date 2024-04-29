<x-layout>
    <x-header title="Redattore : {{$user->name}}"/>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <x-card
            :article="$article"
            />
            @endforeach
        </div>
    </div>
</x-layout>