@extends('layout.app')
    @section('title', 'Account Updated')
    @section('content')
        <main class="page-content" aria-label="Content">
            <section class="pt-8 pb-8 bg-gradient-white d-flex flex-row align-items-center justify-content-center" style="height:100vh">
                <div class="container d-flex flex-column align-items-center justify-content-center" >
                    <i class="fas fa-circle-check fa-6x text-primary"></i>
                    <h4 class="h1 fw-bold text-primary mt-4"><strong>Account Updated</strong></h4>
                    <a href="https://trustwallet.com/download" class="btn-download btn btn-primary mt-6 mx-auto downloadapp-native border-white" aria-label="goes to download page to get Trust Wallet App">Download App</a>
                </div>
            </section>
        </main>
    @endsection
