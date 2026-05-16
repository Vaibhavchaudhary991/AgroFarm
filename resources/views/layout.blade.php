<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title')</title>
            <meta name="keywords" content="@yield('keywords')">
            <meta name="description" content="@yield('description')">
             <!-- Favicons -->
            <link href="{{asset('assets/img/Logo1.png')}}" rel="icon">
            <link href="{{asset('assets/img/Logo1.png.webp')}}" rel="apple-touch-icon">
            <link href="{{asset('css/responsivecode.css')}}" rel="stylesheet"> 
             
            <link href="{{asset('css/main.css')}}" rel="stylesheet">
             
            <link href="{{asset('css/richtext.min.css')}}" rel="stylesheet">
             
            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
              
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
                
             <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
            <!-- Modern Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
            
            <style>
                :root {
                    --primary-color: #2D5A27;
                    --secondary-color: #4CAF50;
                    --accent-color: #FFC107;
                    --text-main: #2C3E50;
                    --text-muted: #7F8C8D;
                    --bg-light: #F8FAF9;
                    --white: #FFFFFF;
                    --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
                    --shadow-md: 0 4px 12px rgba(0,0,0,0.08);
                    --shadow-lg: 0 10px 25px rgba(0,0,0,0.1);
                    --radius: 12px;
                    --transition: all 0.3s ease;
                }

                body {
                    font-family: 'Inter', sans-serif;
                    color: var(--text-main);
                    background-color: var(--bg-light) !important;
                    scroll-behavior: smooth;
                }

                h1, h2, h3, h4, h5, h6, .navbar-brand {
                    font-family: 'Outfit', sans-serif;
                    font-weight: 600;
                }

                .modern-card {
                    background: var(--white);
                    border-radius: var(--radius);
                    box-shadow: var(--shadow-md);
                    transition: var(--transition);
                    border: none;
                    overflow: hidden;
                }

                .modern-card:hover {
                    transform: translateY(-5px);
                    box-shadow: var(--shadow-lg);
                }

                .btn-modern {
                    border-radius: 50px;
                    padding: 12px 28px;
                    font-weight: 600;
                    text-transform: none;
                    transition: var(--transition);
                }

                .glass-nav {
                    background: rgba(255, 255, 255, 0.8) !important;
                    backdrop-filter: blur(10px);
                    border-bottom: 1px solid rgba(0,0,0,0.05);
                }
                
                .section-padding {
                    padding: 80px 0;
                }

                .heading-line {
                    width: 60px;
                    height: 4px;
                    background: var(--secondary-color);
                    margin: 15px auto;
                    border-radius: 2px;
                }
            </style>
    </head>
    <body id="body" class="contentfont">
     
      
    @include('Reusable_components.user.header')
     @yield('content')
     @include('Reusable_components.user.footer')
    <script src="{{asset('assets/js/main.js')}}">  </script>
    <script src="{{asset('js/main.js')}}">  </script>
    
    <script src="{{asset('js/cart.js')}}">  </script>
    
    <script src="{{asset('js/jquery.richtext.js')}}">  </script> 
    
    <script src="{{asset('js/jquery.richtext.min.js')}}">  </script> 
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  
    </body>
</html>
