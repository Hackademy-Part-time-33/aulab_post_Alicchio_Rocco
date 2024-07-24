<x-layout>
    <div class= "container-fluid p-5  text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                @if(session('alert'))
                <div class="alert alert-danger">
                    {{session('alert')}}
                </div>
                @endif
                
                
                
                
                
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="title"> Tutti gli articoli </h1>
                        </div>
                    </div>
                    
                    <div class="row justify-content-evenly">
                        
                        @foreach ($articles as $article)
                        <div class="col-12 col-md-3">
                            <x-article-card :article="$article"/>
                        </div>
                        @endforeach
                    </div>    
</x-layout>
                