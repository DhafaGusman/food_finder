@extends("layout.layout_auth")

@section("description", "Login food finder")
@section("title", "Login | Food Finder")
@section("style", asset('css/style_login.css'))
@section("script", asset('js/script_login.css'))

@section("content")
<div class="wrapper">
    <div class="title">Login Page</div>
    <form action="../../index.html">
      <div class="field">
        <input type="text" id="username" required />
        <label for="username">Username</label>
      </div>
      <div class="field">
        <input type="password" id="password" required />
        <label for="password">Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="remember-me" />
          <label for="remember-me">Remember me</label>
        </div>
        <div class="pass-link">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="field">
        <input type="submit" value="Login" onclick="login(event)" />
      </div>
      <div class="signup-link">
        Not a member? <a href="register.html">Signup now</a>
        <br />
        <a href="../../index.html">Return to Home</a>
      </div>
    </form>
</div>
@endsection
