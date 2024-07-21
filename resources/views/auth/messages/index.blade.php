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
                  @if(count($messages)>0) 
                  <h4 class="card-title">Messages</h4>

                
                    <table id="posts-table" class="table table-striped">
                      <thead>
                        <tr>
                          <th>nom </th>
                          <th>email</th>
                          <th>sujet</th>
                          <th>message</th>
                          <th>envoyer a</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($messages as $msg)
                         <tr>
                          
                          <td> 
                            {{$msg->nom}}
                          </td>

                          <td>
                          {{$msg->email}}

                          </td>

                          <td> 
                          {{Str::limit($msg->sujet, 15) }}
                          </td>
                         
                          <td>
                          {{Str::limit($msg->user_message, 15) }}
                          </td>
                         
                          <td>
                          
                          {{ $msg->created_at->diffForHumans() }}

                          </td>
                         

                          
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                    @else 
                    <h3 class="text-center text-danger">Pas de message</h3>
                    @endif


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