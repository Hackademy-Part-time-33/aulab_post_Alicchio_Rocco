<table class="table table-striped table-hover custom-form">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="form-label">#</th>
            <th scope="col" class="form-label">Titolo</th>
            <th scope="col" class="form-label">Sottotitolo</th>
            <th scope="col" class="form-label">Categoria</th>
            <th scope="col" class="form-label">Tags</th>
            <th scope="col" class="form-label">Inserito il</th>
            <th scope="col" class="form-label">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->category->name ?? 'Nessuna categoria'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                #{{$tag->name}}
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{ route('article.show', $article) }}" class="btn custom-btn1">Leggi</a>
                <a href="{{ route('article.edit', $article) }}" class="btn custom-btn1">Modifica</a>
                <form action="{{ route('article.destroy', $article) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn custom-btnRifiuta">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
