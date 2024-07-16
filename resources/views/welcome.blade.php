<x-layout>
    <div class= "container-fluid p-5  text-center">
        <div class="row justify-content-center">
            <div class="col-12">

                @if(session('alert'))
                    <div class="alert alert-danger">
                        {{session('alert')}}
                    </div>
                @endif
                
                <h1 class="display-1 bg-secondary-subtle title">
                    THE AULAB POST
                </h1>



            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title"> Tutti gli articoli </h1>
                    </div>
                </div>
                
                <div class="row justify-content-evenly">
                    
                        @foreach ($articles as $article)

                    <div class="col-12 col-md-3">
                     <div class="card custom-card" style="width: 18rem;">
                           <img src="{{ Storage::url($article->image) }}" class="card-img-top custom-card-img" alt="Immagine dell'articolo: {{ $article->title }}">
                            <div class="card-body">
                                <h5 class="card-title"> {{$article->title}} </h5>
                                <p class="card-text"> {{$article->subtitle}} </p>
                                 <p class="card-text"> Categoria: 
                                 <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted"> {{ $article->category->name }} </a>
                                 </p>
                                 <p class="small text-muted my-0">
                                    @foreach ($article->tags as $tag)

                                        #{{ $tag->name }}
                                    
                                        
                                    @endforeach
                                 </p>

                         </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br> 
                                da  <a href="{{ route('articles.byUser', $article->user->id) }}" class="text-decoration-none">{{ $article->user->name }}</a>
                             </p>
                                <a href="{{route('article.show', $article)}}" class="btn custom-btn1">
                                
                                    Leggi

                                </a>
                             
                             </div>
                         </div>
                    </div>
                        @endforeach
                </div>
            </div>




                @if (session('message'))

                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    
                @endif
            </div>
        </div>
    </div>
</x-layout>
