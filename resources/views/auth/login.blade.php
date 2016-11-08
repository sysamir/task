<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>


    <link rel="stylesheet" href="/login2/css/reset.css">


        <link rel="stylesheet" href="/login2/css/style.css">





  </head>

  <body>

    <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Xoş Gəlmişsiniz</strong> </h1>
      <form method="post" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Şifrə" required="required" class="input-txt" />
          <div class="login-footer">

            <button type="submit" class="btn btn--right">Daxil Ol  </button>

          </div>
      </form>
  </div>
</div>

        <script src="/login2/js/index.js"></script>



  </body>
</html>
