@extends("layouts.frontbase")
@section('title','Contact Page')
@section('head')
<style>

.contact-form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
}

.contact-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-control {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.form-control label {
  font-weight: bold;
  margin-bottom: 5px;
}

.form-control input,
.form-control textarea {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
}

.form-control input:focus,
.form-control textarea:focus {
  outline: none;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
}

.form-control textarea {
  height: 150px;
}

button[type="submit"] {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}
      body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
      }
      
      h1 {
        text-align: center;
        color: #333;
      }
      
      form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }
      
      label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
      }
      
      input[type="text"],
      input[type="email"],
      textarea {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      
      textarea {
        height: 150px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2><a href="/">Home</a></h2>
            </div>
        </div>
    </div>
<!-- section -->
<div class="section">
        <!-- container -->
        @include('home.messages')
        <div class="container">
            <!-- row -->
            <div class="contact-form">
                <form id="checkout-form" action="/storemessage" class="clearfix" method="post">
                            @csrf
                    <h2>Contact Us</h2>
                            <div class="contact-form">
                                <input class="input" type="text" name="name" placeholder="Name & Surname">
                            </div>
                            <div class="contact-form">
                                <input class="input" type="tel" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="contact-form">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>

                            <div class="contact-form">
                                <input class="input" type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="contact-form">
                                <textarea class="input" type="text" name="message" placeholder="Your Message"></textarea>
                            </div>
                            @auth
                            <div class="contact-form">
                                <input class="input" type="submit" value="Send Message">
                            </div>
                            @endauth
                           @guest
                            <div class="contact-form">
                                <a href="loginuser" class="btn-primary-1" style="color: #4CAF50;">Please login to get in touch.</a>
                            </div>
                           @endguest
  </form>
</div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

</div>
@endsection