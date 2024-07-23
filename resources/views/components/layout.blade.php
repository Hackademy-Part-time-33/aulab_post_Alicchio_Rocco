<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources\css\app.css', 'resources\js\app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+CL:wght@100..400&display=swap" rel="stylesheet">
    <title>The Aulab Post</title>

</head>
<body>
    <x-navbar />
    @if (Route::currentRouteName() == 'homepage')
    <div class="bebas-neue-regular display-1 bg-secondary-subtle title testo">
            PROFUMO
    </div>
    <div class="bebas-neue-regular display-1 bg-secondary-subtle title">
        <img src="offerta.jpg" alt="immagine con offerta 45%" class="presentation-image">
        
    </div>

      
    @endif
    <div class="min-vh-100">
        {{ $slot }}
    </div>
    <x-footer />
</body>
</html>
