<x-layout>
    <x-header title="{{ $article->title }}" />

    <div class="container my-5 showCus rounded-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-center mt-3">
                    <img src="{{ Storage::url($article->image) }}" alt="img_body"
                        class="img-fluid rounded-2 mt-5 imgCusShow">
                </div>
                <div class="my-5">
                    <h2 class="accentTxt">{{ $article->subtitle }}</h2>
                </div>
                <p class="mt-2 parRevisor mainTxt bodyCus">{{ $article->body }}</p>
                <div class="my-3 text-muted fst-italic">
                    <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                        class="small fst-italic text-capitalize categoryCus mainTxt text-decoration-none cardCus">{{ $article->category->name }}
                    </a>
                    <p class="mainTxt text-end">Redatto da : <a class="mainTxt text-decoration-none cardCus"
                            href="{{ route('article.byUser', ['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
                        il
                        {{ $article->created_at->format('d/m/Y') }}
                    </p>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6 d-flex justify-content-start mb-4"><a href="{{ route('article.index') }}"
                    class="btn accentBg btnCus">Vai a più articoli</a>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end mb-4">
                @if (Auth::user() && Auth::user()->is_revisor && !$article->is_accepted)
                    <a href="{{ route('revisor.acceptArticle', compact('article')) }}"
                        class="btn btn-success text-white btnCusRev ">Accetta articolo</a>
                    <a href="{{ route('revisor.rejectArticle', compact('article')) }}"
                        class="btn btn-danger text-white ">Rifiuta articolo</a>
                @endif
            </div>
        </div>
    </div>



</x-layout>
