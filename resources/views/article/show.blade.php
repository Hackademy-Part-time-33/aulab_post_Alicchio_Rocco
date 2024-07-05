<x-layout>
    <div class= "container-fluid p-5  text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 bg-secondary-subtle">
                   {{$article->title}}
                </h1>
            </div>
        </div>
    </div>        

            <div class="container my-5">
                <div class="row justify-content-center">
                    
                    

                    <div class="col-12 col-md-8 d-flex flex-column">
                     <div class="card" style="width: 18rem;">
                            <img src="{{ Storage::url($article->image) }}" class="img-fluid" alt="Immagine dell'articolo: {{ $article->title }}">
                         <div class="text-center">
                                
                                <h1> {{$article->subtitle}} </h1>
                                 <p class="fs-5"> Categoria: 
                                    <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted"> {{ $article->category->name }} </a>
                                 </p>
                                 <div class="text-muted my-3">
                                        <p> Redatto il {{$article->created_at->format('d/m/Y')}}  da  <a href="{{ route('articles.byUser', $article->user->id) }}" class="text-decoration-none">{{ $article->user->name }}</a>
                                 </div>
                         </div>
                         <hr>
                         <p>{{$article->body}}</p>
                         <div class="text.center">
                            <a href="{{route('article.index')}}" class="text-secondary"> 
                                Vai alla lista degli articoli
                            </a>
                         </div>
                        
                        </div>
                    </div>
                       
                </div>
            </div>
            
            

</x-layout>