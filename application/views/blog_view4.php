<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="utf-8"> 
  <title>Daftar Pelanggan</title> 
  <!-- load bootstrap css file --> 
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesh eet"> 
</head> 
 
<body> 
  <div class="container"> 
    <h2>Daftar Pelanggan</h2> 
    <table class="table table-striped"> 
      <thead> 
      <tr> 
          <th scope="col">#</th> 
          <th scope="col">Nama Depan</th> 
          <th scope="col">Nama Belakang</th> 
          <th scope="col">Inisial</th> 
        </tr> 
      </thead> 
      <tbody> 
        <tr> 
          <th scope="row">1</th> 
          <td>Dani</td> 
          <td>Yusuf</td> 
          <td>DNY</td> 
        </tr> 
        <tr> 
          <th scope="row">2</th> 
          <td>Denis</td> 
          <td>Ahmad</td> 
          <td>DNA</td> 
        </tr> 
        <tr> 
          <th scope="row">3</th> 
          <td>Danu</td> 
          <td>Septian</td> 
          <td>DNS</td> 
        </tr> 
      </tbody> 
    </table> 
  </div> 
  <!-- load jquery js file --> 
  <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>   <!-- load bootstrap js file --> 
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
</body>  
</html>
