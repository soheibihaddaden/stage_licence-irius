@extends('layouts.auth')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
@endsection
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Messages </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Messages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tous les messages</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                
                  <h4 class="card-title">Message Details</h4>
                 <p><strong>Nom:</strong> {{ $message->nom }}</p>
                 <p><strong>Email:</strong> {{ $message->email }}</p>
                 <p><strong>Sujet:</strong> {{ $message->sujet }}</p>
                 <p><strong>Message:</strong> {{ $message->user_message }}</p>
                 <p><strong>Envoyé à:</strong> {{ $message->created_at->translatedFormat('d F Y') }}</p>
                 <a href="{{ url()->previous() }}">Retour</a>
                  </div>
                </div>
              </div>


            </div>
          </div>

@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#posts-table').DataTable();
} );


  </script>
@endsection