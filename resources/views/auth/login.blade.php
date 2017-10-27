@include('auth.partials._head_login')
    <div class="wrapper">      
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Login</h2>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong style="color:red;">{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <input type="text" class="form-control" name="email" placeholder="Email Address" required>   

    @if ($errors->has('password'))
        <span class="help-block">
            <strong style="color:red;">{{ $errors->first('password') }}</strong>
        </span>
    @endif    
    <input type="password" class="form-control" name="password" placeholder="Password" required>  
  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div> 
</body>
</html>
