  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      
      </section>


      <section class="content">
       
        <div class="box box-success col-md-6" style="margin-left: 300px">
          <div class="box-header with-border">
            <h3 class="box-title"><i class=" fa fa-times-circle"></i> Close Month</h3>
          </div>
          <div class="box-body ">
              <form method="post" action="<?php echo site_url("close_month/close_month/close_month") ?>">
                  <div class="" align="center">
                        <div class="col-md-12" >
                      <div class="form-group ">
                        <label for="form_control_1">FINANCIAL PERIOD</label>
                          <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm" data-date-viewmode="years">
                            <input type="text" class="form-control input" value="<?php echo date("Y-m") ?>" name="period" readonly>
                            <span class="input-group-btn">
                              <button class="btn default" type="button">
                                <i class="fa fa-calendar"></i>
                              </button>
                            </span>
                          </div>
                      </div>
                    </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn green"><i class="fa fa-check"> </i> Process </button>
                      </div>
              </form>
             
          </div>

        </div>
<div class="note note-info">
                      <h4 class="block"><i class="fa  fa-info-circle"></i> PS</h4>
                      <p>Make sure that all vouchers already <b>Posted</b></p>
                    </div>
      </section>

    </div>

  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  