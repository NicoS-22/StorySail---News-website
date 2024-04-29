<div class="container-fluid">
    <div class="row  mx-5">
        <div class="col-12 d-flex justify-content-center">
            <h4 class="accentTxt">IN EVIDENZA:
                <a href="{{ route('article.byCategory', ['category' => App\Models\Category::where('name', 'sport')->first()]) }}"
                    class="text-decoration-none mainTxt suggested">
                    sport </a>

                <span class="mainTxt">|</span>

                <a href="{{ route('article.byCategory', ['category' => App\Models\Category::where('name', 'economia')->first()]) }}"
                    class="text-decoration-none mainTxt suggested">economia </a>

                <span class="mainTxt">|</span>

                <a href="{{ route('article.byCategory', ['category' => App\Models\Category::where('name', 'politica')->first()]) }}"
                    class="text-decoration-none mainTxt suggested"> politica </a>
            </h4>
        </div>
    </div>
</div>
