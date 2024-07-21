@extends('layouts.website')


@section('content')

<section class="contact-form-container">
    <div class="container">
        <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
           </div>
        @endif
    
            <form method="post" action="{{ route('contacter-nous.store') }}" id="contact-form" class="contact-form-box">
                @csrf
                <h2 style="text-align:center; margin-bottom: 20px;">Écrivez votre message</h2>
                <div class="contact-form-section">
                    <input name="nom" type="text" class="contact-input" placeholder="Votre Nom">
                    <input name="email" type="text" class="contact-input" placeholder="Adresse Email">
                    <input name="sujet" type="text" class="contact-input" placeholder="Sujet">
                </div>
                <div class="contact-form-section">
                    <textarea name="user_message" class="contact-input" rows="3" placeholder="Votre Message"></textarea>
                    <button class="contact-form-btn" type="submit">Envoyer le message</button>
                </div>

            </form>
            @if(session('error'))
            <div class="alert alert-danger">
             {{ session('error') }}
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
             {{session('success') }}
            </div>
            @endif

        </div>
    </div>
</section>





@endsection

