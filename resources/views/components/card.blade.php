<div class="card cardCus mb-5">
    <img src="{{ Storage::url($article->image) }}" class="card-img-top imgCus" alt="...">
    <div class="card-body mainTxt">
        <h4 class="card-title text-truncate">{{ $article->title }}</h4>
        <p class="card-text text-truncate">{{ $article->subtitle }}</p>
        @if ($article->category)
            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                class="small text-capitalize mainTxt text-decoration-none cardCus">{{ $article->category->name }}</a>
        @else
            <p class="small mainTxt cardCus"">Non categorizzato</p>
        @endif
        <p class="small text-capitalize text-truncate accentTxt">
            @foreach ($article->tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
        <hr>
        <span class="mainTxt ">Redatto il :</span>
        <span class="mainTxt"
            href="{{ route('article.byUser', ['user' => $article->user->id]) }}">{{ $article->created_at->format('d/m/Y') }}</span>
        <br>
        <span class="mainTxt ">da :</span>
        <a class="mainTxt text-decoration-none cardCus"
            href="{{ route('article.byUser', ['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
        <br>
        <a href="{{ route('article.show', compact('article')) }}" class="btn accentBg btnCus mt-2">Leggi</a>
    </div>
</div>
