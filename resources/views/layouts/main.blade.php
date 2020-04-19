
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Alin Ghiurca">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="{{asset('css/custom_styles.css')}}">

    <title>Movie App</title>
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-grey-800">
    <nav class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li><a href="/"><img src="{{asset('images/logo.jpg')}}" class="logo"></a></li>
              <li class="md:ml-6 mt-3 md:mt-0"><a href="" class="hover:text-grey-300 ">Movies</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="" class="hover:text-grey-300">Tv Shows</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="" class="hover:text-grey-300 ">Actors</a></li>
            </ul>
        <div class="flex flex-col md:flex-row items-center">
            <input type="text" placeholder="Search" class="bg-gray-800 rounded-full text-sm w-64 px-4 pl-8 focus:outline-none focus:shadow-outline py-1">
        <div class="md:ml-4 mt-3 md:mt-0"><a href="">
                <img src="{{asset('images/avatar.jpg')}}" alt="avatar" class="rounded-full w-8 h-8">
            </a></div>
        </div>
    </nav>
</nav>
@yield('content')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</html>
