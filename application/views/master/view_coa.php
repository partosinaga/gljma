 <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Master
          <small></small>
        </h1>
      </section>


      <section class="content">
       
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-database" ></i> Master Chart of Account</h3>
          </div>
          <div class="box-body">
              
                    <div class=""> 
                      <div>
                        <div class="portlet light ">
                          <div class="portlet-body">
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#tab_1_1" data-toggle="tab"><i class="fa fa-folder"></i> Group </a>
                              </li>
                              <li>
                                <a href="#tab_1_2" data-toggle="tab"><i class="fa fa-folder-open"></i> Subgroup </a>
                              </li> 
                              <li>
                                <a href="#tab_1_3" data-toggle="tab"><i class="fa fa-list"></i> COA </a>
                              </li>
                               <li>
                                <a class="dropdown" data-toggle="dropdown" ><i class="fa fa-file-excel-o"></i> Export </a>
                                <ul class="dropdown-menu">
                                  <li ><a href="<?php echo site_url('master/coa/export_coa') ?>"><i class="fa fa-list"></i> COA</a></li>
                                </ul>
                              </li>
                                                            
                            </ul>
                            <div class="tab-content">

<!--====================================PAGE GROUP====================================-->
                              <div class="tab-pane fade active in" id="tab_1_1"><br>
                                  <div class="portlet light bordered">
                                    <form role="form" method="POST" action="<?php echo site_url().'/master/coa/add_group' ?>">
                                          <div class="form-body">
                                            <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="form_control_1">Code</label>
                                                  <div class="input-icon">
                                                  <i class="fa fa-key font-green"></i>
                                                    <input type="text" name="group_id" class="form-control" placeholder="Code">
                                                  </div>
                                                </div>
                                              </div>

                                           

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="form_control_1">Description</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-align-right font-green"></i>
                                                    <input type="text" name="name" class="form-control" placeholder="Description">
                                                  </div>
                                                </div>
                                              </div>                                                
                                            </div>
                                             
                                                <button type="submit" class="btn green"><i class="fa fa-plus-square"> </i> Submit </button>
                                                                               
                                          </div> <hr>
                                            
                                    </form>
                                  </div>
                                    <div class="box-body">
                                      <div class="page-content-inner">
                                        <div class="m-heading-1 border-green ">
                                          <table id="example" class="table table-striped table-bordered" cellspacing="0">
                                            <thead>
                                              <tr>
                                                <th width="20px">NO</th>
                                                <th width="60px">CODE</th>
                                                <th>DESCRIPTION</th>
                                                <th width="120px">ACTION</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                              $no=1;
                                              foreach ($group as $g) 
                                            { ?>
                                              <tr>
                                                <td> <?php echo $no++; ?> </td>
                                                <td> <?php echo $g->group_id; ?> </td>
                                                <td> <?php echo $g->name; ?> </td>
                                                <td align="center" >
                                                      <a data-target="#static<?php echo $g->group_id; ?>" data-toggle="modal">  <button type="button" class="btn default red-stripe btn-xs"><i class="fa fa-trash"></i> delete</button> </a>
                                                      <a href ="<?php echo site_url().'/master/coa/edit_group/'.$g->group_id ;?>">  <button type="button" class="btn default blue-stripe btn-xs"><i class="fa fa-edit"></i> edit</button> </a>
                                                    </td>
                                              </tr>

 <!--MODAL CONFIRMATION-->
    <div id="static<?php echo $g->group_id; ?>"  class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        Are you sure to <b>DELETE</b> this data?
      
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url().'/master/coa/delete_group/'.$g->group_id;?>"  >
          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> OK</button>
        </a>
        <button type="button" data-dismiss="modal" form="form1" class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</button>
      </div>
    </div>
<!--/MODAL CONFIRMATION-->


                                              <?php } ?>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>  
                              </div>

<!--==================================== END PAGE GROUP====================================-->
                            


<!--=============================== BEGIN PAGE SUBGROUP================================-->
                              <div class="tab-pane fade" id="tab_1_2">
                                <div class="portlet light bordered">
                                    <form role="form" method="POST" action="<?php echo site_url().'/master/coa/add_subgroup' ?>">
                                          <div class="form-body">
                                            <div class="row">

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="form_control_1">Code</label>
                                                  <div class="input-icon">
                                                  <i class="fa fa-key font-green"></i>
                                                    <input type="text" name="subgroup_id" class="form-control" placeholder="Code">
                                                  </div>
                                                </div>
                                              </div>
                                           
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Description</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-align-right font-green"></i>
                                                    <input type="text" name="name_sg" class="form-control" placeholder="Description">
                                                  </div>
                                                </div>
                                              </div>  

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                 <label>Group</label>
                                                  <div class="input-icon">
                                                  <select class="form-control select2" name ="kelompok">
                                                  <option value="" selected >Select Group Account </option>
                                                  <?php
                                                    foreach ($getGroup->result_array() as $data){
                                                      echo "<option value=". $data["group_id"]." >"
                                                            .$data["group_id"]. "-" .$data["name"]. 
                                                          "</option>";
                                                    }
                                                  ?>
                                                </select>
                                                  </div>
                                                </div>
                                              </div> 


                                            </div>
                                             
                                            <button type="submit" class="btn green"><i class="fa fa-plus-square"> </i> Submit </button>
                                                                               
                                          </div> <hr>
                                            
                                    </form>
                                  </div>
                                  <div class="box-body">
                                      <div class="page-content-inner">
                                        <div class="m-heading-1 border-green ">
                                          <table id="example1" class="table table-striped table-bordered" cellspacing="0">
                                            <thead>
                                              <tr>
                                                <th width="30px">NO</th>
                                                <th width="50px">CODE</th>
                                                <th>DESCRIPTION</th>
                                                <th width="200px">GROUP</th>
                                                <th width="120px">ACTION</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                              $no=1;
                                              foreach ($subgroup as $sg) 
                                            { ?>
                                              <tr>
                                                <td> <?php echo $no++; ?> </td>
                                                <td> <?php echo $sg->subgroup_id; ?> </td>
                                                <td> <?php echo $sg->name_sg; ?> </td>
                                                <td> <?php echo $sg->name; ?> </td>
                                                <td align="center" >
                                                      <a data-target="#static<?php echo $sg->subgroup_id; ?>" data-toggle="modal">  <button type="button" class="btn default red-stripe btn-xs"><i class="fa fa-trash"></i> delete</button> </a>
                                                      <a href ="<?php echo site_url().'/master/coa/edit_subgroup/'.$sg->subgroup_id ;?>">  <button type="button" class="btn default blue-stripe btn-xs"><i class="fa fa-edit"></i> edit</button> </a>
                                                    </td>
                                              </tr>

 <!--MODAL CONFIRMATION-->
    <div id="static<?php echo $sg->subgroup_id; ?>"  class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        Are you sure to <b>DELETE</b> this data?
      
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url().'/master/coa/delete_subgroup/'.$sg->subgroup_id;?>"  >
          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> OK</button>
        </a>
        <button type="button" data-dismiss="modal" form="form1" class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</button>
      </div>
    </div>
<!--/MODAL CONFIRMATION-->


                                              <?php } ?>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div> 

                              </div>
<!--==================================== END PAGE SUBGROUP=============================-->

                              <div class="tab-pane fade" id="tab_1_3">
                                <div class="portlet light bordered">
                                    <form role="form" method="POST" action="<?php echo site_url().'/master/coa/add_coa' ?>">
                                          <div class="form-body">

                                            <div class="row">

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                 <label>Subgroup</label>
                                                  <div class="input-icon">
                                                  <select class="form-control select2" name ="subgroup">
                                                  <option value="" selected >Select Subgroup Account </option>
                                                  <?php
                                                    foreach ($getSubgroup->result_array() as $data){
                                                      echo "<option value=". $data["subgroup_id"]." >"
                                                            .$data["subgroup_id"]. "-" .$data["name_sg"]. 
                                                          "</option>";
                                                    }
                                                  ?>
                                                </select>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="form_control_1">Code</label>
                                                  <div class="input-icon">
                                                  <i class="fa fa-key font-green"></i>
                                                    <input type="text" name="coa_id" class="form-control" placeholder="Code">
                                                  </div>
                                                </div>
                                              </div>
                                           
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Description</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-align-right font-green"></i>
                                                    <input type="text" name="name_coa" class="form-control" placeholder="Description">
                                                  </div>
                                                </div>
                                              </div>  

                                              
                                            </div>

                                            <div class="row">
                                             
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Date</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-calendar-plus-o font-green"></i>
                                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                                  </div>
                                                </div>
                                              </div>  
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Debit Banlance</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-align-right font-green"></i>
                                                    <input type="text" name="debit" class="form-control input text-right" value="0" placeholder="Description" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
                                                  </div>
                                                </div>
                                              </div>  

                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Credit Balance</label>
                                                  <div class="input-icon">
                                                    <i class="fa fa-align-right font-green"></i>
                                                    <input type="text" name="credit" class="form-control input text-right" value="0" placeholder="Credit Balance" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
                                                  </div>
                                                </div>
                                              </div>  
                                              <div class="col-md-4">
                                              <!-- checkbox -->
                                               <div class="form-group">
                                                <label> Header</label>
                                                  <input type="checkbox" name="header" value="header" class="flat-red" > |                                                
                                                <label> Active</label>
                                                  <input type="checkbox" name="active" value="active" class="flat-red" checked>
                                               </div>
                                              </div>
                                            </div>
                                            
                                         
                                            <button type="submit" class="btn green"><i class="fa fa-plus-square"> </i> Submit </button>
                                                                               
                                         <hr>
                                      </form> 
                                </div> 

                                <div class="box-body">
                                      <div class="page-content-inner">
                                        <div class="m-heading-1 border-green ">
                             
                                         <table id="example2" class="table table-striped table-bordered" cellspacing="0">
                                            <thead>
                                              <tr>
                                                <th width="50px">CODE</th>
                                                <th  >DESCRIPTION</th>
                                                <th >DATE</th>
                                                <th width="40px">SUBGROUP</th>
                                                <th width="60px">DEBIT BALANCE</th>
                                                <th width="60px">CREDIT BALANCE</th>
                                                <th width="30px">HEADER</th>
                                                <th width="30px" >ACTIVE</th>
                                                <th width="20px">ACTION</th>
                                          

                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                              foreach ($coa as $c) 
                                            { ?>
                                              <tr>
                                                <td> <?php echo $c->coa_id; ?> </td>
                                                <td> <?php echo $c->name_coa; ?> </td>
                                                <td> <?php echo $c->date; ?> </td>
                                                <td> <?php echo $c->subgroup; ?> </td>
                                                <td> <?php echo $c->debit; ?> </td>
                                                <td> <?php echo $c->credit; ?> </td>
                                                <td align="center" >
                                                   <?php  
                                                    if ($c->header == "header") {
                                                      echo "&#10004";
                                                    }
                                                   ?>  
                                                </td>
                                               
                                                <td align="center">
                                                   <?php  
                                                    if ($c->active == "active") {
                                                      echo "&#10004";
                                                    }
                                                   ?>  
                                                </td>
                                                <td>
                                                    
                          <div class="btn-group">
                            <button type="button" class="btn default blue-stripe btn-xs dropdown-toggle" data-toggle="dropdown"><i class="angle-down"></i> Action
                              <i class="fa fa-angle-down"></i>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="<?php echo site_url('master/coa/edit_coa/'.$c->coa_id) ?>"><i class="fa fa-edit"></i> Edit </a>
                                </li>
                                <li>
                                  <a data-target="#static<?php echo $c->coa_id; ?>" data-toggle="modal">  <i class="fa fa-trash"></i> Delete </a>
                                </li>
                              </ul>
                          </div>
                                                </td>
<!--MODAL CONFIRMATION-->
    <div id="static<?php echo $c->coa_id; ?>"  class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        Are you sure to <b>DELETE</b> this data?
      
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url().'/master/coa/delete_coa/'.$c->coa_id;?>"  >
          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> OK</button>
        </a>
        <button type="button" data-dismiss="modal" form="form1" class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</button>
      </div>
    </div>
<!--/MODAL CONFIRMATION-->

                                                
                                              </tr>
                                              <?php } ?>
                                            </tbody>
                                          </table>
                             
                                        </div>
                                      </div>
                                    </div> 


                              </div>
                                                          
                            </div>
                            <div class="clearfix margin-bottom-20"> </div>
                                                        
                                                        
                        </div>
                        </div>
                      </div>
                  </div>       


     

        </div>

      </section>

    </div>

  </div>
<style type="text/css">
  td {
    font-size: 10pt;
  }
</style>
<script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
    $('#example1').DataTable();
    $('#example2').DataTable();
} );
</script>