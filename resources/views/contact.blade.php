<!--!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
</html-->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="contact-caption clearfix">
                <div class="contact-heading text-center">
                    <h2>contact us</h2>
                </div>
                <div class="col-md-5 contact-info text-left">
                    <h3>contact information</h3>
                    <div class="info-detail">
                        <ul>
                            <li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><span>Address:</span> 248 Galle Road , Rawathawaththa, Moratuwa, SL </li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-phone"></i><span>Phone:</span> (011) 22-43216</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-fax"></i><span>Fax:</span> (011) 22-43217</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-envelope"></i><span>Email:</span> info@doctorappoinment.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 contact-form">
                    
                    <h3>leave us a message</h3>

                    <form method="POST" class="form" action="{{ route('contact.store') }}">
                        @csrf
                        <input type="text" class="name" placeholder="Name" name="name" id="name">
                        <input type="email" class="email" placeholder="Email" name="email" id="email">
                        <input type="text" class="phone"  placeholder="Phone No:" name="phone" id="phone">
                        <textarea class="message" id="message" name="message" cols="30" rows="10" placeholder="Message" ></textarea>
                        <input class="submit-btn" type="submit" value="SUBMIT" name="send">
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of contact section -->