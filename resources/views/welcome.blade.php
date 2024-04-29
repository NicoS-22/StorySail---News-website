<x-layout>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <x-suggested />



    <div class="container my-5">
        <div class="row justify-content-between">
            @foreach ($articles as $article)
                @if ($loop->first)
                    {{-- 
                    <div class="container">
                        <div class="row justify-content-center h-50"> --}}
                    <div class="col-12">
                        {{-- <div class="center"> --}}
                    <a href="{{ route('article.show', compact('article')) }}">
                        <div class="article-card">
                            <div class="content">
                                <p class="categoryMain text-capitalize ">{{ $article->category->name }}</p>
                                <p class="title">{{ $article->title }}</p>
                                <p class="subtitle">{{ $article->subtitle }}</p>
                            </div>
                            <img src="{{ Storage::url($article->image) }}" alt="article-cover" />
                        </div>
                    </a>
                        {{-- </div> --}}
                    </div>
                    {{--  </div>
                    </div> --}}
                @else
                    <div class="col-12 col-md-3 p-2 mt-4">
                        <x-card :article="$article" />
                    </div>
                @endif
            @endforeach
        </div>
    </div>


</x-layout>
