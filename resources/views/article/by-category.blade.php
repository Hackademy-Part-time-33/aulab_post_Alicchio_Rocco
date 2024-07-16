<x-Layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-capitalize">{{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
       <div class="row justify-content-evently">
        
                 
         @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                       <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{ $article->title }}">
                    <div class="card-body">
                           
                           <h5 class="card-title"> 
                            {{$article->subtitle}}
                           </h5>
                           <p class="card-subtitle"> 
                                {{$article->subtitle }}
                           </p>
                           <p class="small text-muted my-0">
                            @foreach ($article->tags as $tag)

                                #{{ $tag->name }}
                            
                                
                            @endforeach
                         </p>

                    </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">

                                   <p> Redatto il {{$article->created_at->format('d/m/Y')}}  da {{$article->user->name}}

                                   </p>
                                   <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary"> 

                                        Leggi

                                   </a>
                            
                            </div>
                
                </div>
                   
            </div> 
        @endforeach
        </div>
       

    </div>
                  
</x-Layout>
