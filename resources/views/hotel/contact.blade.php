@extends('pages_layouts.layout')
@section('content')

    <div class="container">
        <!-- <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" /> -->
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <br>
                <br>
                <p class="text">
                    Thanks for stay with us!
                    <br>
                    send us your feedback...
                </p>

                <div class="info">
                    <div class="information">
                        <img src="img/location.png" class="icon" alt="" />
                        <p>SLIATE HNDIT BADULLA</p>
                    </div>
                    <div class="information">
                        <img src="img/email.png" class="icon" alt="" />
                        <p>sliate@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="img/phone.png" class="icon" alt="" />
                        <p>+9472-740-2192</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="save_contact" autocomplete="off" method="post" >
                    @csrf
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="username" class="input" name="user_name" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" name="email"/>
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" name="phone" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" name="message"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>

   @endsection
