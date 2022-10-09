@extends('Guest.parent.master')
@section('content')
    <section class="section contact">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 ">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="far fa-map"></i>
                            <div class="media-body">
                                <h3>Location</h3>
                                <p>PO Box 16122 Collins Street West <br>Victoria 8007 Canada</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fas fa-phone"></i>
                            <div class="media-body">
                                <h3>Phone</h3>
                                <p>
                                    (+48) 564-334-21-22-34
                                    <br>(+48) 564-334-21-22-38
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="far fa-envelope"></i>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p>
                                    info@templatepath.com
                                    <br>info@cleanxer.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form action="!#" class="row">
                            <!-- name -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control main" placeholder="Name" required>
                            </div>
                            <!-- email -->
                            <div class="col-lg-6">
                                <input type="email" class="form-control main" placeholder="Email" required>
                            </div>
                            <!-- phone -->
                            <div class="col-lg-12">
                                <input type="text" class="form-control main" placeholder="Phone" required>
                            </div>
                            <!-- message -->
                            <div class="col-lg-12">
                                <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">Send Message</button>
                            </div>
                        </form>
                        <!-- contact form end -->
                    </div>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217759.99380853778!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1663489514621!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- container end -->
    </section>
@endsection
