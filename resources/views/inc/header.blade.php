
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Cover Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="css/cover.css" rel="stylesheet">-->
     <link rel="stylesheet" type="text/css" href="css/app.css">
 </head>
 <body class="d-flex h-100 text-center text-white bg-dark">

 <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
     <header class="mb-auto">
         <div>
             <h3 class="float-md-start mb-0">Guestbook</h3>
             <nav class="nav nav-masthead justify-content-center float-md-end">

                 @if(Request::is('/'))
                    <a class="nav-link active "  href="/">Главная</a>
                 @else
                     <a class="nav-link"  href="/">Главная</a>
                 @endif

                 @if(Route::currentRouteName()=='create_comment')
                     <a class="nav-link active"  href="/add-comment">Оставить запись</a>
                 @else
                     <a class="nav-link " href='/add-comment'>Оставить запись</a>
                 @endif
                 @if(Route::currentRouteName()=='view_comment')
                         <a class="nav-link active" aria-current="page" href="/all-comment">Просмотреть все записи</a>
                     @else
                         <a class="nav-link" href="/all-comment">Просмотреть все записи</a>
                 @endif



             </nav>
         </div>
     </header>

     <main class="px-3">

         <p class="lead">@yield('content')</p>

         </p>
     </main>

     <footer class="mt-auto text-white-50">
         <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://www.instagram.com/vladkurkchi/" class="text-white">Senpai184</a>.</p>
     </footer>
 </div>



 </body>
 </html>
