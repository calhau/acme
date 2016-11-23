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
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <input type="button" action="onclick()" value="teste"/>


    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });

        $(document).ready(function(){
          $("input").click(function(){
            alert("oi victor");
            //$("#datetimepicker1").pickadate();
            });
        }); //this was missing
    </script>
