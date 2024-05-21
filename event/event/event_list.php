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
                        <h1 class="m-0 text-dark">Event<small class="ml-3 mr-3">|</small><small>Event Management</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Event</li>
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
                                            <a class="nav-link active" href="<?php echo site_url('event'); ?>"><i
                                                    class="fa fa-list mr-2"></i>Event List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url('event/create'); ?>"><i
                                                    class="fa fa-plus mr-2"></i>Create Event</a>
                                        </li>
                                        <div class="ml-auto d-inline-flex">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link  dropdown-toggle pt-1" data-toggle="dropdown"
                                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"><i
                                                        class="fa fa-save"></i> Export
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="exportCsvDatatable" href="#"> <i
                                                            class="fa fa-file-excel-o mr-2"></i>CSV</a>
                                                    <a class="dropdown-item" id="exportExcelDatatable" href="#"> <i
                                                            class="fa fa-file-excel-o mr-2"></i>Excel</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" id="exportPdfDatatable" href="#"> <i
                                                            class="fa fa-file-pdf-o mr-2"></i>PDF</a>
                                                </div>
                                            </li>
                                        </div>
									</ul>
                                </div>
                                <!-- /.card-header -->
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="example1">
                                            <thead>
                                                <tr>
		    <th>Kd Event</th>
		    <th>Tgl Event</th>
		    <th>Jadwal</th>
		    <th>Tema</th>
		    <th>Jenis</th>
		    <th>Metode Event</th>
		    <th>Link Event</th>
		    <th>Status</th>
		    <th width="200px">Action</th>
                                                </tr>
                                            </thead>
	  
                                            <tbody><?php
                                            foreach ($event as $event)
                                            {
                                                ?>
                                                <tr>
			<td><?php echo $event->kd_event ?></td>
			<td><?php echo $event->tgl_event ?></td>
			<td><?php echo $event->jadwal ?></td>
			<td><?php echo $event->tema ?></td>
			<td><?php echo $event->jenis ?></td>
			<td><?php echo $event->metode_event ?></td>
			<td><?php echo $event->link_event ?></td>
			<td><?php echo $event->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchorupdate(site_url('event/update/'.$event->id),'Update'); 
				echo ' | '; 
				echo anchordelete(site_url('event/delete/'.$event->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>  
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
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
        <!-- /.content-wrapper -->
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