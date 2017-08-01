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
                  <div>
                  
                          <form class="col s12" >
                            <div class="row">
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
                          </form>
                  </div>

                  <br>

                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="faname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Father's Name</span></label>

                              <input type="text" name="faname" id="faname" class="form-control" required="true" placeholder="Father's Name">      
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Mother's Name</span></label>

                              <input type="text" name="mname" id="mname" class="form-control" required="true" placeholder="Mother's Name">      
                      </div>
                  </div>

                  <br>

                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="phone" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Contact No.</span></label>

                              <input type="text" name="phone" id="phone" class="form-control" required="true" placeholder="Contact No.">      
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="aphone" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Contact No.</span></label>

                              <input type="text" name="aphone" id="aphone" class="form-control" required="true" placeholder="Alternate Contact No.">      
                      </div>
                  </div>

                  <br>

                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="eid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Email Id</span></label>

                              <input type="text" name="eid" id="eid" class="form-control" required="true" placeholder="Email Id">      
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 "  >
                              <label for="dob" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Date Of Birth</span></label>

                              <input type="text" name="dob" id="dob" class="form-control" required="true" placeholder="Date Of Birth">      
                      </div>
                  </div>

                  <br>

                  <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                              <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Address</span></label>
                              <textarea class="pa form-control" placeholder="Address" rows="5" name="address"></textarea>
                        </div>
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
  <!-- /.content-wrapper -->

  <?php


include("footer.php");
?>
