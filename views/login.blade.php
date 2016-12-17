@extends('base')
@section('browsertitle')
Bruno: Login
@stop

@section('css')
<style>
  .red {
    color:red;
  }
</style>

@stop

@section('content')
        <div class="row">
            <div class="col-md-12">
              <h2>Eu estou aqui!</h2>
            </div>
            <div class="col-md-2 "></div>
            <div class="col-md-8">
                <h1>Log In</h1>
                <hr />
                <form id="registerform" class="form-horizontal"  name="registerform" action="/doRegister.php" method="post">

                  <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">Email:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control required" id="username" name="username" placeholder="username@email.com">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">Password:</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control required" id="password" name="password" placeholder="Password">
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Logar</button>
                      </div>
                  </div>
                </form>

            </div>
            <div class="col-md-2">
            </div>
          </div>
@stop
