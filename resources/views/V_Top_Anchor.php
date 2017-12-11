  <style>
  .current{  
      font-weight: bold;
      color: #367fa9;    
  }

  a:hover{
     color: #367fa9;
  }  

  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
       <?php echo $judul;?>
      </h1>
      

    </section>

    <!-- Main content -->
    <section class="content">
    <h3><a class="<?php if($top==1){ echo 'current';}?>" href="<?php echo base_url().'nomor_rubrik/C_Surat';?>">Surat</a> |
     <a class="<?php if($top==2){ echo 'current';}?>" href="<?php echo base_url().'nomor_rubrik/C_Surat_Tugas';?>">Surat Tugas </a> |
      <a class="<?php if($top==3){ echo 'current';}?>" href="<?php echo base_url().'nomor_rubrik/C_Memo';?>">Memo</a> |
       <a class="<?php if($top==4){ echo 'current';}?>" href="<?php echo base_url().'nomor_rubrik/C_LDP';?>">LDP</a> 
       | <a class="<?php if($top==5){ echo 'current';}?>" href="<?php echo base_url().'nomor_rubrik/C_Catatan';?>">Catatan </a></h3>
