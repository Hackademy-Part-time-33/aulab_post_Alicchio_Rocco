<x-Layout>
    <div class="container">
        <h2>Articoli di {{ $user->name }}</h2>
        @foreach ($articles as $article)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-subtitle text-muted mb-2">{{ $article->subtitle }}</p>
                    <p class="card-text">{{ $article->body }}</p>
                    <p class="small text-muted my-0">
                        @foreach ($article->tags as $tag)

                            #{{ $tag->name }}
                        
                            
                        @endforeach
                     </p>

                </div>
                <div class="card-footer">
                    Scritto da <a href="{{ route('articles.byUser', $article->user->id) }}">{{ $article->user->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</x-Layout>
