@extends('layouts.public')
@section('content')
<div class="content0">
      <div class="content">
         <div class="text">
            Login
         </div>
         <form action="#">
            <div id="Username" class="field">
               <input  type="text" required autofocus>
               <span class="fas fa-user"></span>
               <label>Username</label>
            </div>
            <div id="Password" class="field">
               <input type="password" required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <button class="button-login">Sign in</button>
            <div class="sign-up">
               Not a member?
               <a href="#">signup now</a>
            </div>
         </form>
      </div>
    </div>
@endsection