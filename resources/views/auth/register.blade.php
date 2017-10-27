@include('auth.partials._head')
    <div class="wrapper">      
    <form class="form-signin" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Register</h2>
    @if ($errors->has('name'))
      <span class="help-block">
          <strong style="color:red;">{{ $errors->first('name') }}</strong>
      </span>
    @endif    
    <input style="margin-bottom:20px;" type="text" class="form-control" name="name" placeholder="Your Name" required>
    @if ($errors->has('email'))
      <span class="help-block">
          <strong style="color:red;">{{ $errors->first('email') }}</strong>
      </span>
    @endif   
    <input style="margin-bottom:20px;" type="text" class="form-control" name="email" placeholder="Email Address" required>
    @if ($errors->has('photo'))
      <span class="help-block">
          <strong style="color:red;">{{ $errors->first('photo') }}</strong>
      </span>
    @endif   
     <input style="margin-bottom:20px;" type="file" class="form-control" name="photo" title="your photo" required>
    @if ($errors->has('password'))
      <span class="help-block">
          <strong style="color:red;">{{ $errors->first('password') }}</strong>
      </span>
    @endif   
    <input type="password" class="form-control" name="password" placeholder="Password" required> 

    @if ($errors->has('password_confirmation'))
      <span class="help-block">
          <strong style="color:red;">{{ $errors->first('password_confirmation') }}</strong>
      </span>
    @endif        
    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>      
    
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>   
    </form>
  </div> 
</body>
</html>