<x-layout>
    <x-header title="Ricerca per: {{ $query }}" />

    <div class="container">
        <div class="row justify-content-around p-0">
            @foreach ($articles as $article)
                @if ($loop->first)
                    <div class="row justify-content-center h-50">
                        <div class="col-12 p-0 my-5">
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
                        </div>
                    @else
                        <div class="col-12 p-0 my-5">
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
                @endif
            @endforeach
        </div>
    </div>
    </div>

</x-layout>
