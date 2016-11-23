<div class="row">
  <div class="col-md-12 text-center">
    <h2>MAKE A RESERVATION</h2>
    <hr/>
    <br /><br />
  </div>
</div>

    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date datepicker' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon datepicker">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <script>
            $(".datepicker").pickadate();
            </script>
        </div>

    </div>


  <button onclick="teste()">Click me</button>
  @section('bottomjs')
  <script>
    $('h2').addClass('redes');

    // function teste(){
    //   document.write("alooo");
    // };
    //


    </script>
  @stop
