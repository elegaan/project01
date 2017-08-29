<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>. : APIS - Login</title>
    <link rel="stylesheet" href="css/bootstrap-3.3.7.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap-3.3.7.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
  </head>
  <body>
    <div id="page">
      <div id="top-menu">
                      </div>
      <div id="left-page">
                  
              </div>
      <div id="middle-page">
          <div class="container">
    <div class="row" id="create-row">
      <div class="col-md-10" id="create-col-left">
          <div class="create-h">
            <h2>Edit&nbsp;record</h2>
        </div>
      </div>       <div class="col-md-2" id="create-col-right">
        <div class="logged">
          <div>Logged as:</div>
          <p><strong>sys admin</strong></p>
          <a href="/APIS-Symfony01/project01/web/app_dev.php/logout">Logout</a>
        </div>
      </div>     </div>     <form id="contact-form" method="post" data-toggle="validator" action="/APIS-Symfony01/project01/web/app_dev.php/save">
                  <div class="form-group">
        <div class="controls">
          <span>KJOBS</span>
          <input type="text" id="kjobs" class="form-control" name="kjobs" maxlength="30" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KPODN</span>
          <input type="text" id="kpodn" class="form-control" name="kpodn" maxlength="13" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KPODN2</span>
          <input type="text" id="kpodn2" class="form-control" name="kpodn2" maxlength="13" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KUZIV</span>
          <input type="text" id="kuziv" class="form-control" name="kuziv" maxlength="10" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>        
      <div class="form-group">
        <div class="controls">
          <span>NUZIV</span>
          <input type="text" id="nuziv" class="form-control" name="nuziv" maxlength="72" value="miriam" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KRGIS</span>
          <input type="text" id="krgis" class="form-control" name="krgis" maxlength="30" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KPROG</span>
          <input type="text" id="kprog" class="form-control" name="kprog" maxlength="10" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>KSYST</span>
          <input type="text" id="ksyst" class="form-control" name="ksyst" maxlength="10" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>VER_PROG</span>
          <input type="text" id="ver_prog" class="form-control" name="ver_prog" maxlength="15" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>VER_SYST</span>
          <input type="text" id="ver_syst" class="form-control" name="ver_syst" maxlength="15" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>VER_DATA</span>
          <input type="text" id="ver_data" class="form-control" name="ver_data" maxlength="15" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="controls">
          <span>MAXUSER</span>
          <input type="text" id="maxuser" class="form-control" name="maxuser" maxlength="11" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors" id="maxuser-error"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="controls">
          <span>DEVID</span>
          <input type="text" id="devid" class="form-control" name="devid" maxlength="10" value="05.07.2017" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
            <div class="form-group">
        <div class="controls">
          <span>SERIALNUM</span>
          <textarea type="text" class="form-control" id="serialnum" name="serialnum" rows="3" maxlength="200" value="" placeholder="" data-error="Error"></textarea>
                    <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>CLOUDID</span>
          <textarea type="text" class="form-control" id="cloudid" name="cloudid" rows="3" maxlength="200" value="" placeholder="" data-error="Error"></textarea>
                    <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>HOST</span>
          <input type="text" id="host" class="form-control" name="host" maxlength="20" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>LAKTIV</span>
          <input type="text" id="laktiv" class="form-control" name="laktiv" maxlength="11" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>LARCHIV</span>
          <input type="text" id="larchiv" class="form-control" name="larchiv" maxlength="11" value="" placeholder="" data-error="Error">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="controls">
          <span>OPOZN</span>
          <textarea type="text" class="form-control" id="opozn" name="opozn" rows="3" maxlength="200" value="" placeholder="" data-error="Error"></textarea>
                    <div class="help-block with-errors"></div>
        </div>
      </div>
            <br>
      <button type="button" id="back" class="btn btn-primary text-right" onclick="window.location.href = '/APIS-Symfony01/project01/web/app_dev.php/'">Back</button>       <button type="reset" id="reset" class="btn btn-danger text-right">Reset form</button>
      <button type="submit" id="submit" class="btn btn-success text-right">Edit&nbsp;record</button>
            <input type="hidden" name="pk" value="61">
    </form>
    <div id="result"></div>

  </div>   
<script type="text/javascript">
  // Attach a submit handler to the form
  $( "#contact-form" ).submit(function( event ) {
 
    // Stop form from submitting normally
    event.preventDefault();
 
    // Get some values from elements on the page:
    var $form = $( this ),
      term = $form.find( "input[name='maxuser']" ).val(),
      url = $form.attr( "action" );
 
    // Send the data using post
    var posting = $.post( url, $('#contact-form').serialize());
 
    // Put the results in a div
    posting.done(function( data ) {
      //var content = $( data ).find( "#content" );
      $( "#maxuser-error" ).empty().append( data.resp );
      //console.log(data.resp);
      if (data.resp === "ok") {
        //window.history.back();
        window.location.href = '/APIS-Symfony01/project01/web/app_dev.php/';
      }
    });  
  });
  
  
  // set date format
  $( "#devid" ).datepicker({
    dateFormat: "dd.mm.yy", // "yy-mm-dd"  "mm/dd/yy"
    firstDay: 1, // Monday = 1, Sunday = 0
    maxDate: "+5y" // max. + 5 years from today
    //dayNames: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    //dayNamesMin: [ "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su" ]
  });

  $( function() {
    $("#devid").datepicker();
    //dateFormat: "yy-mm-dd"; // "mm/dd/yy"
  });
</script>
              </div>  <!-- /#middle-page-->
    </div>
</body>
</html>
