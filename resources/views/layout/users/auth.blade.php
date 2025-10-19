<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
        :root{
            --text:black;
        }
      body{
  
   background-color: var(--bg);
background-image: url("{{ asset('images/background.jpg') }}");
background-size:cover;
background-position:center;
  
}
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
    <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
   <svg fill="currentColor" height="100" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="7.33" height="7.33"><animate id="spinner_oJFS" begin="0;spinner_5T1J.end+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="15.66" width="7.33" height="7.33"><animate id="spinner_5T1J" begin="spinner_oJFS.begin+0.4s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect></svg>
   </div>
     <header>

    </header>
    <main>
        @yield('main')

    </main>
    <footer>

    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
       window.addEventListener('load',()=>{
             document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
        });
    </script>
    @yield('js')
</body>
</html>