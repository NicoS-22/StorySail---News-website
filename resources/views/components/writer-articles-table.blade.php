<table class="table table-striped table-hover border">

    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->category->name ?? 'Non categorizzato' }}</td>
                <td>
                    @foreach ($article->tags as $tag)
                        {{ $tag->name }},
                    @endforeach
                </td>
                <td>{{ $article->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('article.edit', compact('article')) }}"
                        class="text-decoration-none darkTxt fa-solid fa-pen-to-square py-3 px-3 ms-2 me-4 mt-1 iconCus"
                        title="Modifica"></a>
                    <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger ms-3 me-2 mb-3">Elimina articolo</button>
                    </form>
                    <a href="{{ route('article.show', compact('article')) }}"
                        class="btn accentBg btnCus mb-4 mt-2 btnWriter ms-3 me-2">Leggi l'articolo</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
