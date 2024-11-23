
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
    
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3><?php echo $total_brands ?></h3>

                <h4><b>Total Items</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-cubes"></i>
              </div>
              <a href="<?php echo base_url('Controller_Items/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3><?php echo $total_category ?></h3>

                <h4><b>Total Category</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-th"></i>
              </div>
              <a href="<?php echo base_url('Controller_Category/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $total_attribures; ?></h3>

               <h4><b>Total Elements</h4></b>
              </div>
              <div class="icon">
                <i class="fa fa-files-o"></i>
              </div>
              <a href="<?php echo base_url('Controller_Element/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php $query = $this->db->query('SELECT SUM( net_amount)as total FROM orders WHERE paid_status = 1')->row(); echo floatval($query->total);?></h3>

                <h4><b>Total Sales</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-dollar"></i>
              </div>
              <a href="<?php echo base_url('Controller_Orders/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>


        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

               <h4><b>Total Products</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-cube"></i>
              </div>
              <a href="<?php echo base_url('Controller_Products/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-olive">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

               <h4><b>Paid Orders</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="<?php echo base_url('Controller_Orders/?paid=1') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php $query = $this->db->query('SELECT * FROM orders WHERE paid_status = 2'); echo $query->num_rows();?></h3>

                <h4><b>UnPaid Orders</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-spinner"></i>
              </div>
              <a href="<?php echo base_url('Controller_Orders/?paid=2') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <h4><b>Total Members</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url('Controller_Members/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

               <h4><b>Supplier</b></h4>
              </div>
              <div class="icon">
                <i class="fa fa-institution"></i>
              </div>
              <a href="<?php echo base_url('Controller_Warehouse/') ?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->


        
        <!-- /.row -->
      <?php endif; ?>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>

<style>

/* General dashboard styling for 1360x768 screen resolution */
.content-wrapper {
  margin-left: 220px; /* Matches sidebar width */
  padding: 20px;
  background-color: #f4f6f9;
  overflow-x: hidden;
}

/* Dashboard Header */
.content-header h1 {
  font-size: 24px;
  color: #333;
}

.breadcrumb {
  background: transparent;
  font-size: 14px;
  padding: 0;
}

/* Dashboard box styling */
.small-box {
  background: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  position: relative;
  display: block;
  margin-bottom: 20px;
  padding: 20px;
  color: #333;
  transition: all 0.3s;
}

.small-box:hover {
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  transform: translateY(-5px);
}

.small-box .inner h3 {
  font-size: 22px;
  font-weight: bold;
  margin: 0;
}

.small-box .inner h4 {
  font-size: 16px;
  color: #666;
  margin-top: 5px;
}

.small-box .icon {
  font-size: 48px;
  color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: 15px;
  right: 15px;
  transition: color 0.3s;
}

.small-box-footer {
  display: block;
  padding: 10px;
  background: rgba(0, 0, 0, 0.05);
  color: #666;
  font-size: 14px;
  text-align: center;
  border-radius: 0 0 8px 8px;
  transition: background-color 0.3s;
}

.small-box-footer:hover {
  background-color: #f4f4f4;
  color: #333;
}

/* Small box color variants */
.bg-purple { background-color: #6f42c1; color: #ffffff; }
.bg-teal { background-color: #20c997; color: #ffffff; }
.bg-yellow { background-color: #ffc107; color: #ffffff; }
.bg-green { background-color: #28a745; color: #ffffff; }
.bg-primary { background-color: #007bff; color: #ffffff; }
.bg-olive { background-color: #3d9970; color: #ffffff; }
.bg-maroon { background-color: #85144b; color: #ffffff; }
.bg-aqua { background-color: #00c0ef; color: #ffffff; }
.bg-red { background-color: #dc3545; color: #ffffff; }

/* Dashboard row layout */
.row .col-lg-3.col-xs-6 {
  flex-basis: 25%;
  max-width: 25%;
}

@media screen and (max-width: 1360px) {
  /* Responsive layout adjustments for smaller screens */
  .row .col-lg-3.col-xs-6 {
    flex-basis: 50%;
    max-width: 50%;
  }
}

@media screen and (max-width: 768px) {
  /* Further adjustments for mobile screens */
  .row .col-lg-3.col-xs-6 {
    flex-basis: 100%;
    max-width: 100%;
  }
}

    
</style>