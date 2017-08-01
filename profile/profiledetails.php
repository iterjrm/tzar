<?php


include("header.php");

$editid=1;
//$_SESSION['u_id'];





   require("../php/connect.php");

                                        $query = "SELECT * FROM trainuserprof WHERE id=$editid"; 

                                          $result=$conn->query($query);
                                              
                                        $row=$result->fetch_array();
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
                                    <input id="fname" type="text" value="<?php echo $row['fname']?>" class="validate">
                                    <label for="fname">First Name</label>
                                  </div>

                                  <div class="input-field col s4">
                                    <input id="mname" type="text" class="validate" value="<?php echo $row['mname']?>">
                                    <label for="mname">Middle Name</label>
                                  </div>

                                  <div class="input-field col s4">
                                    <input id="lname" type="text" value="<?php echo $row['lname']?> class="validate">
                                    <label for="lname">Last Name</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="fn" type="text" class="validate" value="<?php echo $row['fn']?>>
                                    <label for="fn">Father's Name</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="mn" type="text" class="validate" value="<?php echo $row['mn']?>>
                                    <label for="mn">Mother's Name</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="contact" type="text" class="validate" value="<?php echo $row['contact']?>>
                                    <label for="phone">Contact No.</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="altcontact" type="text" class="validate" value="<?php echo $row['altcontact']?>>
                                    <label for="altcontact">Alternate Contact No.</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="text" class="validate" value="<?php echo $row['email']?>>
                                    <label for="email">Email Id</label>
                                  </div>

                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="dob" type="date" class="validate" value="<?php echo $row['dob']?> >
                                    <label for="dob">Date Of Birth</label>
                                  </div>
                  </div>

                  <br>

                  <div class="row">
                                    <div class="input-field col s12">
                                      <i class="material-icons prefix">home</i>
                                      <textarea id="address" class="materialize-textarea" value="<?php echo $row['address']?>></textarea>
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
  

  <?php


include("footer.php");
?>
