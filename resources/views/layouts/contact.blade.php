
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Shop | Contact </title>
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">




</head>
<body>
<section class="contact pt-100 pb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title mb-100">
                    <p>Get in touch</p>
                    <h4>Contact Us</h4>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-8">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="text" placeholder="name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="email">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="subject">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="telephone">
                        </div>
                        <div class="col-xl-12">
                            <textarea placeholder="message" cols="30" rows="10"></textarea>
                            <input type="submit" class="btn" value="Send message">
                            <a href="{{route('home')}}" class="btn btn-danger col-xl-12 mt-2"> Trang chủ </a>


                        </div>


                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="single-contact">
                    <i class="fa fa-location"></i>
                    <h5>Address</h5>
                    <p>Cầu Giấy</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-phone"></i>
                    <h5>Phone</h5>
                    <p>(+84) 0338691729</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-envelope"></i>
                    <h5>Email</h5>
                    <p>Lexuanquynh0123@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
