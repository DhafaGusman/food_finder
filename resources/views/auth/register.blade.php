@extends("layout.layout_auth")

@section("description", "Register food finder")
@section("title", "Register | Food Finder")
@section("style", asset('css/style_register.css'))
@section("script", asset('js/script_register.css'))

@section("content")
<div class="wrapper">
    <div class="title">Register Page</div>
    <form id="registerForm">
      <div class="field">
        <input type="text" id="username" required />
        <label for="username">Username</label>
      </div>
      <div class="field">
        <input type="email" id="email" required />
        <label for="email">Email Address</label>
      </div>
      <div class="field">
        <input type="password" id="password" required />
        <label for="password">Password</label>
      </div>
      <div class="field">
        <input type="password" id="password2" required />
        <label for="password2">Repeat Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="remember-me" />
          <label for="remember-me">Remember me</label>
        </div>
      </div>
      <div class="field">
        <input type="button" value="Register" onclick="registerUser(event)" />
      </div>
      <div class="signup-link">
        Already a member? <a href="login.html">Login now</a>
        <br />
        <a href="../../index.html">Return to Home</a>
      </div>
    </form>
  </div>
