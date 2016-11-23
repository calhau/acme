@extends('base')

@section('browsertitle')
Bruno: Register
@stop

@section('css')
<style>

</style>
@stop

@section('content')
        <div class="row">
            <div class="col-md-2 "></div>
            <div class="col-md-8">
                <h1>Registration form</h1>
                <!-- -->
                <!-- -->
                <!-- Preciso entender essa logica abaixo. Estudar!!!!Sintaxe do twig, variavel errors esta sendo passado pela Controller.-->



                <hr />

                <!-- -->
                <!-- -->
                <!-- Primeiro formulario-->
                <!-- Registra Usuarios -->
                <form id="registerform" class="form-horizontal"  name="registerform" action="/register" method="post" >

                  <div class="form-group">
                      <label for="first_name" class="col-sm-2 control-label">Nome:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control required" id="first_name" name="first_name" placeholder="Nome">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="last_name" class="col-sm-2 control-label">Sobrenome:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control required" id="last_name" name="last_name" placeholder="Sobrenome">
                      </div>
                  </div>


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control required" id="email" name="email" placeholder="user@email.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control " id="verify_email" name="verify_email" placeholder="user@email.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Verify Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Registrar VITOR</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-2"></div>
        </div>
@stop


@section('bottomjs')
<script>
  $(document).ready(function (){
    $("#registerform").validate({
      rules:{
        verify_username:{
          required:true,
          email:true,
          equalTo:"#username"
        }
      }
    });
  })
</script>
@stop
