@extends('layouts.website')


@section('content')

<section class="contact-form-container">
    <div class="container">
        <div class="row justify-content-center">
            <form id="contact-form" class="contact-form-box">
                <div class="contact-form-section">
                    <input name="user_name" type="text" class="contact-input" placeholder="Your Name">
                    <input name="user_email" type="text" class="contact-input" placeholder="Email Address">
                    <input name="user_subject" type="text" class="contact-input" placeholder="Subject">
                </div>
                <div class="contact-form-section">
                    <textarea name="user_message" class="contact-input" rows="3" placeholder="Your Message"></textarea>
                    <button class="contact-form-btn" type="submit">Send Message</button>
                </div>
                <div class="contact-form-error" id="error">Sorry, message did not send.</div>
                <div class="contact-form-success" id="success">Message Sent</div>
            </form>
        </div>
    </div>
</section>




@endsection

