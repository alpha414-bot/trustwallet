<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
      <meta property="og:title" content="Best Cryptocurrency Wallet | Ethereum Wallet | ERC20 Wallet | Trust Wallet" />
      <meta name="description" content="Trust Wallet is the best ethereum wallet and cryptocurrency wallet to store your favourite BEP2, ERC20 and ERC721, tokens. Download the Android Trust Wallet and iOS app today!" />
      <meta property="og:description" content="Trust Wallet is the best ethereum wallet and cryptocurrency wallet to store your favourite BEP2, ERC20 and ERC721, tokens. Download the Android Trust Wallet and iOS app today!" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta property="twitter:image" content="https://trustwallet.com/assets/images/media/preview/horizontal_blue.png" />
      <meta name="twitter:creator" content="@trustwalletapp" />
      <meta property="og:locale" content="en" />
      <meta property="og:image" content="https://trustwallet.com/assets/images/media/preview/horizontal_blue.png" />
      <meta property="og:type" content="website" />
      <link rel="canonical" href="https://trustwallet.com/" />
      <meta property="og:url" content="https://trustwallet.com/" />
      <meta property="og:site_name" content="Trust Wallet" />
      <meta property="al:ios:app_name" content="Trust Wallet" />
      <meta property="al:ios:app_store_id" content="1288339409" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <meta property="al:ios:url" content="trust://" />
      <meta property="al:android:app_name" content="Trust Wallet" />
      <meta property="al:android:package" content="com.wallet.crypto.trustapp" />
      <meta property="al:android:url" content="https://trustwallet.com" />
      <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png" />
      <meta name="apple-itunes-app" content="app-id=1288339409,affiliate-data=11l7ss">
      <meta name="theme-color" content="#3375BB">
      <script type="application/ld+json">
         {
           "description": "Trust Wallet is the best ethereum wallet and cryptocurrency wallet to store your favourite BEP2, ERC20 and ERC721, tokens. Download the Android Trust Wallet and iOS app today!",
           "@type": "WebPage",
           "url": "https://trustwallet.com/",
           "headline": "Best Cryptocurrency Wallet | Ethereum Wallet | ERC20 Wallet | Trust Wallet",
           "@context": "https://schema.org"
         }
      </script><script async defer data-domain="trustwallet.com" src="https://analytics.trustwallet.com/js/plausible.js"></script>
      <script>window.plausible = window.plausible || function() { (window.plausible.q = window.plausible.q || []).push(arguments) }</script>
      <script type="application/javascript">
         document.addEventListener("DOMContentLoaded", function(event) {
           document.getElementById('navbarToggle').addEventListener('click', function() {
             var el = document.getElementById('navbarSupportedContent');
             var toggled = window.getComputedStyle(el).display == 'block';
             if (toggled) {
               el.style.display = "none";
             } else {
               el.style.display = "block";
             }
           })
           //Add Huawei download button based on device.
           var result = new UAParser().getResult();
           var apple = document.getElementsByClassName("apple");
           var huawei = document.getElementsByClassName("huawei");
           var download = document.getElementsByClassName("downloadapp-native");
         
           if (result.os.name == "Android") {
             for (var i = 0; i < huawei.length; i++) {
               huawei[i].classList.remove("hidden");
               apple[i].classList.add("hidden");
             }
             // if it is android change ctas to googleplay
             for (var i = 0; i < download.length; i++) {
               download[i].href = "https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite";
             }
           }
           // if its apple change ctas to appstore
            else if (result.os.name == "iOS") {
             for (var i = 0; i < download.length; i++) {
               download[i].href = "https://apps.apple.com/app/apple-store/id1288339409?mt=8";
             }
           }
         });
      </script>
      <script>
        $(document).ready(function(){
          $('#exampleModal').modal('show');
        })
      </script>
      <noscript>Your browser does not support JavaScript!</noscript>
      <link rel="preload" href="/assets/fonts/IBMPlexSans/IBMPlexSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="/assets/fonts/IBMPlexSans/IBMPlexSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="/assets/fonts/IBMPlexSans/IBMPlexSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="stylesheet" href="/css/main.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      {{-- <script type="text/javascript" src="/assets/js/platform.js"></script> --}}
      <style>
        .button-no {
          border:none;
        }
      </style>
      <script>
        $(document).ready( function () {
            $('#table').DataTable();
        });
      </script>
   </head>
   <body>
   @yield('content')
   </body>
</html>