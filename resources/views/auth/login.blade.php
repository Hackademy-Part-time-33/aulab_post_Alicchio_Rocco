<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded custom-form" action="{{ route('login')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn custom-btn1">Accedi</button>
                    <a href="{{route('register')}}" class="btn custom-btn-outline">Non sei registrato?</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>

