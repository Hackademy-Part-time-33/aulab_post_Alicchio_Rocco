<table class="table table-striped table-hover custom-form">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="form-label">#</th>
            <th scope="col" class="form-label">Titolo</th>
            <th scope="col" class="form-label">Sottotitolo</th>
            <th scope="col" class="form-label">Redattore</th>
            <th scope="col" class="form-label">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->user->name }}</td>
            <td>
                <div class="d-flex gap-2">
                    @if (is_null($article->is_accepted))
                    <a href="{{route('article.show', $article)}}" class="btn custom-btn1">Leggi l'articolo</a>
                    @else
                    <a href="{{route('revisor.undoArticle', $article)}}" class="btn custom-btn1">Riporta in revisione</a>
                    @endif
                    
                    @if (Auth::user() && (Auth::user()->is_revisor || Auth::user()->is_admin))
                    <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn custom-btnAccetta">Accetta l'articolo</button>
                    </form>
                    <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn custom-btnRifiuta">Rifiuta l'articolo</button>
                    </form>
                    @endif
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
