<?php


include("header.php");
?>




    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

                      
                <h2>Profile Details</h2>
                  <div class="row" id="jrm">
                                  <div class="input-field col s4">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="fname" type="text" class="validate">
                                    <label for="fname">First Name</label>
                                  </div>

                                  <div class="input-field col s4">
                                    <input id="mname" type="text" class="validate">
                                    <label for="mname">Middle Name</label>
                                  </div>

                                  <div class="input-field col s4">
                                    <input id="lname" type="text" class="validate">
                                    <label for="lname">Last Name</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="faname" type="text" class="validate">
                                    <label for="faname">Father's Name</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="mname" type="text" class="validate">
                                    <label for="mname">Mother's Name</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="phone" type="text" class="validate">
                                    <label for="phone">Contact No.</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="aphone" type="text" class="validate">
                                    <label for="aphone">Alternate Contact No.</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Email Id</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="dob" type="date" >
                                    <label for="dob">Date Of Birth</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                    <div class="input-field col s12">
                                      <i class="material-icons prefix">home</i>
                                      <textarea id="address" class="materialize-textarea"></textarea>
                                      <label for="address">Address</label>
                                    </div>
 
                  </div>

                  <br>

                  </div class="row">
                                    <a class="waves-effect waves-light btn">SUBMIT</a>
                  </div>

              </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->]
  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  </script>

  <?php


include("footer.php");
?>
