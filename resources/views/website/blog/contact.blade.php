@extends('layouts.website')

@section('title', 'contact')

@section('content')


<section class="contact-form">
    <div class="container">
        <div class="row">
            <form id="contact-form" >
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        
                        <div class="form-group">
                            <input name="user_name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input name="user_subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2">
                            <textarea name="user_message" class="form-control" rows="3" placeholder="Your Message"></textarea>
                        </div>
                            <button class="btn btn-default" type="submit">Send Message</button>
                    </div>
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>


    </div>
</section>



@endsection

