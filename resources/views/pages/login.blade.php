<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href={{asset( 'assets/css/style.css')}}>
</head>

<body>
  <div class="container">
    <div class="info">
      <h2>Data Peminjaman</h2><span>Perpustakaan <a href="http://smkn1kepanjen.sch.id/">SMKN 1 Kepanjen</a></span>
      <p><span>Made with <i class="fa fa-heart"></i> by <a href="#">Alfira Nur Fadhilah</a></span></p>
    </div>
  </div>
  <div class="form">
    <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg" /></div>
    <form class="register-form" name='formLogin' method="post" accept-charset="UTF-8" action="{{route('api.login')}}" class="login-form">
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" name='formLogin' method="post" accept-charset="UTF-8" action="{{route('api.login')}}">
      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <button type="submit">login</button>
    </form>
  </div>
<<<<<<< HEAD
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form" name='formLogin' method="post" accept-charset="UTF-8" action="{{route('api.login')}}" class="login-form">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" name='formLogin' method="post" accept-charset="UTF-8" action="{{route('api.login')}}">
    <input type="email" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <button>Login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
=======
>>>>>>> 904b92ffa4be1b7697c631fb53d85f843c2bb5bd
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>