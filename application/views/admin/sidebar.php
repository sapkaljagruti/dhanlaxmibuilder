<?php
if (!isset($page)) {
    $page = '';
}
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/admin/images/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('admin'); ?></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="<?php echo $page == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?php echo site_url('admin'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview <?php echo ($page == 'projects' || $page == 'project status') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-modx"></i>
                    <span>Projects</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $page == 'project status' ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/projects/status'); ?>"><i class="fa fa-crop"></i> Project Status</a></li>
                    <li class="<?php echo $page == 'projects' ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/projects'); ?>"><i class="fa fa-modx"></i> Projects</a></li>
                </ul>
            </li>
            <li class="treeview <?php echo $page == 'components' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $page == 'component_types' ? 'active' : ''; ?>"><a href="pages/charts/chartjs.html"><i class="fa fa-object-ungroup"></i> Component Types</a></li>
                    <li class="<?php echo $page == 'components' ? 'active' : ''; ?>"><a href="pages/charts/morris.html"><i class="fa fa-cubes"></i> Components</a></li>
                </ul>
            </li>
            <li class="<?php echo $page == 'customers' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Customers</span>
                </a>
            </li>
            <li class="<?php echo $page == 'inquiries' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-database"></i> <span>Inquiries</span>
                </a>
            </li>
            <li class="<?php echo $page == 'staff' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-black-tie"></i> <span>Staff</span>
                </a>
            </li>
            <li class="<?php echo $page == 'settings' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Settings</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>