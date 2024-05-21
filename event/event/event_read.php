<!doctype html>
<html>
  <head>
        <?php
          $this->load->view('template/head');
        ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
          <?php
          $this->load->view('template/header');
          $this->load->view('template/menu');
          ?>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Event </h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Event</li>
                      <li class="breadcrumb-item active">read</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <!-- Left col -->
                  <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                      <div class="card-header">
                        <h2 class="card-title">
                          Detail Event
                        </h2>
                        <div class="card-tools">
        
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                        <table class="table">
	    <tr><td>Kd Event</td><td><?php echo $kd_event; ?></td></tr>
	    <tr><td>Tgl Event</td><td><?php echo $tgl_event; ?></td></tr>
	    <tr><td>Jadwal</td><td><?php echo $jadwal; ?></td></tr>
	    <tr><td>Tema</td><td><?php echo $tema; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td>Metode Event</td><td><?php echo $metode_event; ?></td></tr>
	    <tr><td>Link Event</td><td><?php echo $link_event; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td>Last Updated At</td><td><?php echo $last_updated_at; ?></td></tr>
	    <tr><td>Created By</td><td><?php echo $created_by; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('event') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </section>
                  <!-- /.connectedSortable -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>

          <?php
            $this->load->view('template/footer');
          ?>
        </div>
        <!-- ./wrapper -->
        <?php
        $this->load->view('template/javascript_blank');
        ?>
    </body>
</html>