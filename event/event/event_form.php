<!doctype html>
<html>
    <head>
        <?php
          $this->load->view('template/head');
        ?>
    </head>
    <body>
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
                  <h1 class="m-0 text-dark">Event<small class="ml-3 mr-3">|</small><small>Event Management</small></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Event</li>
                      <li class="breadcrumb-item active"><?php echo $button ?></li>
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
                      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('event'); ?>"><i
                                    class="fa fa-list mr-2"></i>Event List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo site_url('event/create'); ?>"><i
                                    class="fa fa-plus mr-2"></i><?php echo $button ?> Event</a>
                        </li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?php echo $action; ?>" method="post" autocomplete="off">
                        <div class="col-sm-6">
	    <div class="form-group row">
                              <label for="kd_event"
                              class="col-4 control-label text-right">Kd Event</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="kd_event"
                              id="kd_event" placeholder="Insert kd_event" value="<?php echo $kd_event; ?>" />
                                      <div class="form-text text-muted">
                                      Insert kd_event <?php echo form_error('kd_event') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="tgl_event"
                              class="col-4 control-label text-right">Tgl Event</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="tgl_event"
                              id="tgl_event" placeholder="Insert tgl_event" value="<?php echo $tgl_event; ?>" />
                                      <div class="form-text text-muted">
                                      Insert tgl_event <?php echo form_error('tgl_event') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="jadwal"
                              class="col-4 control-label text-right">Jadwal</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="jadwal"
                              id="jadwal" placeholder="Insert jadwal" value="<?php echo $jadwal; ?>" />
                                      <div class="form-text text-muted">
                                      Insert jadwal <?php echo form_error('jadwal') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="tema"
                              class="col-4 control-label text-right">Tema</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="tema"
                              id="tema" placeholder="Insert tema" value="<?php echo $tema; ?>" />
                                      <div class="form-text text-muted">
                                      Insert tema <?php echo form_error('tema') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="jenis"
                              class="col-4 control-label text-right">Jenis</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="jenis"
                              id="jenis" placeholder="Insert jenis" value="<?php echo $jenis; ?>" />
                                      <div class="form-text text-muted">
                                      Insert jenis <?php echo form_error('jenis') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="metode_event"
                              class="col-4 control-label text-right">Metode Event</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="metode_event"
                              id="metode_event" placeholder="Insert metode_event" value="<?php echo $metode_event; ?>" />
                                      <div class="form-text text-muted">
                                      Insert metode_event <?php echo form_error('metode_event') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="link_event"
                              class="col-4 control-label text-right">Link Event</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="link_event"
                              id="link_event" placeholder="Insert link_event" value="<?php echo $link_event; ?>" />
                                      <div class="form-text text-muted">
                                      Insert link_event <?php echo form_error('link_event') ?>
                                      </div>
                                  </div>
                              </div>
	    <div class="form-group row">
                              <label for="status"
                              class="col-4 control-label text-right">Status</label>
                              <div class="col-8">
                              <input type="text" class="form-control" name="status"
                              id="status" placeholder="Insert status" value="<?php echo $status; ?>" />
                                      <div class="form-text text-muted">
                                      Insert status <?php echo form_error('status') ?>
                                      </div>
                                  </div>
                              </div>
	    <input type="hidden" name="created_at" value="<?php echo $created_at; ?>" /> 
	    <input type="hidden" name="updated_at" value="<?php echo $updated_at; ?>" /> 
	    <input type="hidden" name="last_updated_at" value="<?php echo $last_updated_at; ?>" /> 
	    <input type="hidden" name="created_by" value="<?php echo $this->session->userdata("user_id"); ?>" /> 
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    </div><!-- /.col-sm-6 -->
	    <div class="form-group col-6 text-right">
	    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('event') ?>" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>
	    </div>
	 </form>
                    </div><!-- /.card-body -->
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