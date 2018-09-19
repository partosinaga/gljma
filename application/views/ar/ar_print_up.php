<!DOCTYPE html>
<html>
<head>
  <title>&nbsp</title>
<!-- <link href="<?php echo base_url(); ?>resource/bank_book.css" rel="stylesheet" type="text/css"/> -->
  
</head>

<style type="text/css">
  table {
      border-collapse: collapse;
  }

  table, td, th {
      border: 1px solid black;
  }
  body {
    background-color: #fff;
    margin: 15px 15px 15px 15px;
    font: 11px normal Helvetica, Arial, sans-serif;
    color: #000000;
}
	  .top{
		position: fixed;
		top: 0;
	  }
	  .bottom{

		position: fixed;
		bottom: 0;
	  }
</style>
<script type="text/javascript">
window.print();
 setTimeout(window.close, 0);
</script>
<body > 
<!-- TOP -->
<div class="top">
  <table width="100%">
    <tr>
      <th colspan="7" align="center" style="font-size: 12pt"><b>RECEIVE VOUCHER</b></th> 
    </tr>

    <tr>
      <th width="250px;" ><b>VOUCHER NO.</b></th>  
      <td width="150pxpx">
        <?php foreach ($header as $h) {
          echo $h->no_voucher;
        } ?>
      </td>  
      <th width="90px;"><b>DATE</th>  
      <td width="200pxpx" >
        <?php foreach ($header as $h) {
          $date = new DateTime($h->date);
          echo $date->format('d-m-Y');
        } ?>
      </td>  
      <td align="center" colspan="3" width="300px"><b>
        <?php foreach ($syspar as $s) {
          echo strtoupper($s->name); 
        } ?>
      </td>  
    </tr>

    <tr>
      <th rowspan="2" align="center" ><b>ACCOUNT CODE</b></th>  
      <th rowspan="2" colspan="3" align="center"><b>ACCOUNT</b></th>  
      <th colspan="3" align="center"><b>AMOUNT</th>  
    </tr>
    <tr>
      <th align="center" width="50px"><b>DEPT.</b></th>  
      <th align="center" width="170px"><b>DEBIT</b></th>  
      <th align="center" width="170px"><b>CREDIT</b></th>  

    </tr>
    <?php
      foreach ($detail as $d) {?>
    <tr>
      <td> <?php echo $d->coa_id ?> </td>  
      <td colspan="3"> <?php echo $d->name_coa ?> </td>  
      <TD>  </td>  
      <td align="right"> <?php echo number_format($d->debit) ?> </td>  
      <td align="right"> <?php echo number_format($d->credit) ?> </td>  
    
    </tr>
    <?php } ?>
    <tr><b>
      <th colspan="5" align="center" >TOTAL</th>    
      <th align="right">
        <?php foreach ($totalDetail as $td) {
          echo number_format($td->total_debit);
        } ?>
      </th>  
      <th align="right">
        <?php foreach ($totalDetail as $h) {
          echo number_format ($td->total_credit);
        } ?>
      </th> </b>
    </tr>
  </table><br>

  <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th width="178px;"><B>CHEQUE/BG.NUMBER</B></th>
    <th width="709px" align="center"><B>DESCRIPTION</B></th>
    <th width="155px" align="center"  ><B>AMOUNT</B></th>
      </tr>
      <tr>
        <td height="50px">
          <?php foreach ($header as $h) {
              echo $h->no_cek;
            } ?>
        </td>
        <td height="50px">
           <?php foreach ($header as $h) {
              echo $h->description;
            } ?>
        </td>
        <td align="right"  height="50px">
          <?php foreach ($header as $h) {
              echo number_format($h->total);
            } ?>
        </td>
      
      </tr>
      <tr>
        <th align="right" colspan="2"><b>TOTAL</b></th>
        
        <th align="right">
          <?php foreach ($header as $h) {
              $terb =$h->total;
               echo number_format($h->total);
            } ?>
        </th>
      </tr>
      <tr>
        <td colspan="3">
          <b>TERBILANG:</b> <?php echo $terbilang->terb; ?> Rupiah
        </td>
      </tr>
    </table><br>

    <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th align="center" width="360px"><b>RECEIVE FROM</th>
        <th align="center"  width="360px" ><b>RECEIVE BY</th>
      </tr>
      <tr>
        <td height="50px" >
           <?php foreach ($header as $h) {
            echo $h->name;
          } ?>
        </td >
        <?php
          $tgl=date("Y");
        ?>
        <td align="center"><br><br>
        _________________ Date: _____/_____/<?php echo $tgl; ?></td>
      </tr>
    </table><br>

    <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th align="center" width="240px" ><B> PEREPARED BY</th>
        <th width="240px" align="center"><B>CHECKED BY</th>
        <th align="center" width="240px"><B>APPROVALS</th>
      </tr>
      <tr align="center">
        <td height="50px" ><br>
          ________________________<br>E
        </td>
        <td height="50px"><br>
          ________________________<br>EM
        </td>
        <td height="50px"> <br>
          ________________________<br>EF
        </td>
      </tr>
    </table>
</div>
<!-- END OF TOP -->
<div class="bottom">
  <table width="100%">
    <tr>
      <th colspan="7" align="center" style="font-size: 12pt"><b>RECEIVE VOUCHER</b></th> 
    </tr>

    <tr>
      <th width="250px;" ><b>VOUCHER NO.</b></th>  
      <td width="150pxpx">
        <?php foreach ($header as $h) {
          echo $h->no_voucher;
        } ?>
      </td>  
      <th width="90px;"><b>DATE</th>  
      <td width="200pxpx" >
        <?php foreach ($header as $h) {
          $date = new DateTime($h->date);
          echo $date->format('d-m-Y');
        } ?>
      </td>  
      <td align="center" colspan="3" width="300px"><b>
        <?php foreach ($syspar as $s) {
          echo strtoupper($s->name); 
        } ?>
      </td>  
    </tr>

    <tr>
      <th rowspan="2" align="center" ><b>ACCOUNT CODE</b></th>  
      <th rowspan="2" colspan="3" align="center"><b>ACCOUNT</b></th>  
      <th colspan="3" align="center"><b>AMOUNT</th>  
    </tr>
    <tr>
      <th align="center" width="50px"><b>DEPT.</b></th>  
      <th align="center" width="170px"><b>DEBIT</b></th>  
      <th align="center" width="170px"><b>CREDIT</b></th>  

    </tr>
    <?php
      foreach ($detail as $d) {?>
    <tr>
      <td> <?php echo $d->coa_id ?> </td>  
      <td colspan="3"> <?php echo $d->name_coa ?> </td>  
      <TD>  </td>  
      <td align="right"> <?php echo number_format($d->debit) ?> </td>  
      <td align="right"> <?php echo number_format($d->credit) ?> </td>  
    
    </tr>
    <?php } ?>
    <tr><b>
      <th colspan="5" align="center" >TOTAL</th>    
      <th align="right">
        <?php foreach ($totalDetail as $td) {
          echo number_format($td->total_debit);
        } ?>
      </th>  
      <th align="right">
        <?php foreach ($totalDetail as $h) {
          echo number_format ($td->total_credit);
        } ?>
      </th> </b>
    </tr>
  </table><br>

  <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th width="178px;"><B>CHEQUE/BG.NUMBER</B></th>
    <th width="709px" align="center"><B>DESCRIPTION</B></th>
    <th width="155px" align="center"  ><B>AMOUNT</B></th>
      </tr>
      <tr>
        <td height="50px">
          <?php foreach ($header as $h) {
              echo $h->no_cek;
            } ?>
        </td>
        <td height="50px">
           <?php foreach ($header as $h) {
              echo $h->description;
            } ?>
        </td>
        <td align="right"  height="50px">
          <?php foreach ($header as $h) {
              echo number_format($h->total);
            } ?>
        </td>
      
      </tr>
      <tr>
        <th align="right" colspan="2"><b>TOTAL</b></th>
        
        <th align="right">
          <?php foreach ($header as $h) {
              $terb =$h->total;
               echo number_format($h->total);
            } ?>
        </th>
      </tr>
      <tr>
        <td colspan="3">
          <b>TERBILANG:</b> <?php echo $terbilang->terb; ?> Rupiah
        </td>
      </tr>
    </table><br>

    <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th align="center" width="360px"><b>RECEIVE FROM</th>
        <th align="center"  width="360px" ><b>RECEIVE BY</th>
      </tr>
      <tr>
        <td height="50px"  >
           <?php foreach ($header as $h) {
            echo $h->name;
          } ?>
        </td >
        <?php
          $tgl=date("Y");
        ?>
        <td align="center"><br><br>
        _________________ Date: _____/_____/<?php echo $tgl; ?></td>
      </tr>
    </table><br>

    <table width="100%" class="table" bordercolor="black" border="1">
      <tr>
        <th colspan="2" align="center" ><B> PEREPARED BY</th>
        <th  align="center"><B>CHECKED BY</th>
        <th colspan="2" align="center"><B>APPROVALS</th>
      </tr>
      <tr align="center">
        <td height="50px" width="20%"><br>
          _______________<br>E
        </td>
        <td height="50px" width="20%"><br>
          _______________<br>EM
        </td>
        <td height="50px" width="20%"><br>
          _____________________<br>HM
        </td>
        <td height="50px" width="20%"> <br>
          _______________<br>RY
        </td>
        <td height="50px" width="20%"> <br>
          _______________<br>AH
        </td>
      </tr>
    </table>
</div>
  </body>
</html>

<style type="text/css">
  .bottom{
  padding-top: 150px;
  }
</style>