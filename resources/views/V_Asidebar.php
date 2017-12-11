
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Halaman Utama</span>
    </a>
    <nav class="navbar navbar-static-top">

    </nav>
  </header>
  <!-- Sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
         <?php if($active=='rubrik') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."nomor_rubrik/C_Surat";?>">
            <i class="fa fa-table"></i>
            <span>Ambil Nomor Rubrik</span>
          </a>
        </li>
        <?php if($active=='surat') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."nomor_rubrik/C_Surat/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-files-o"></i>
            <span>Surat</span>
          </a>
        </li>
        <?php if($active=='surat_tugas') echo '<li class="active treeview">';
              else 
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."nomor_rubrik/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas2";?>">
            <i class="fa fa-book"></i>
            <span>Surat Tugas</span>
          </a>
        </li>  
        <?php if($active=='memo') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."nomor_rubrik/C_Memo/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-share"></i>
            <span>Memo</span>
          </a>
           
        </li>
        <?php if($active=='ldp') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="">
            <i class="fa fa-edit"></i>
            <span>LDP</span>

          </a>
         <ul class="treeview-menu">
         <?php foreach($fungsi as $n){
          if($n->nama_fungsi!="FKKB" && $n->nama_fungsi!="FPPU"){
          if($active2==$n->nama_fungsi) echo '<li class="active">';
              else
                echo'<li >';
            echo'<a href="'.base_url().'nomor_rubrik/C_LDP/TampilkanNomerRubrik_surat2/'.$n->nama_fungsi.'" ><i class="fa fa-circle-o"></i>'.$n->nama_fungsi.'</a></li>';
       }
     }
       if($active2=='DPE') 
          echo '<li class="active">';
              else
                echo'<li >';
            echo'<a href="'.base_url().'nomor_rubrik/C_LDP/TampilkanNomerRubrik_surat2/DPE" ><i class="fa fa-circle-o"></i>DPE</a></li>';
         

         ?>
          </ul>
        </li>
        <?php if($active=='catatan') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="">
            <i class="fa fa-edit"></i>
            <span>Catatan</span>
          </a>
         <ul class="treeview-menu">
         <?php foreach($fungsi as $p){
          if($p->nama_fungsi!="FKKB" && $p->nama_fungsi!="FPPU"){
          if($active3==$p->nama_fungsi) echo '<li class="active">';
              else
                echo'<li>';
            echo'<a href="'.base_url().'nomor_rubrik/C_Catatan/TampilkanNomerRubrik_surat2/'.$p->nama_fungsi.'"><i class="fa fa-circle-o"></i>'.$p->nama_fungsi.'</a></li>';
         }
       }
       if($active3=='DPE') 
          echo '<li class="active">';
              else
                echo'<li >';
            echo'<a href="'.base_url().'nomor_rubrik/C_Catatan/TampilkanNomerRubrik_surat2/DPE" ><i class="fa fa-circle-o"></i>DPE</a></li>';
         
         ?>
          </ul>
        </li>
        </ul>
       
    </section>
    <!-- /.sidebar -->
  </aside>
