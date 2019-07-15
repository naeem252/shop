<?php



?>

<div class="side_nav">
    <ul class="side_nav_box list-unstyled">
        <li class="side_nav_item">
            <a href="index.php" class="side_nav_link <?php if($first_part=="index.php" || $first_part==""){echo "active";}else{echo "";}?>"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
        </li>
        <li class="side_nav_item">
            <a  href="customers.php" class="side_nav_link <?php if($first_part=="customers.php"){echo "active";}else{echo "";}?>"><i class="fas fa-desktop"></i>&nbsp; Customers</a>
        </li>
        <li class="side_nav_item">
            <a href="reports.php" class="side_nav_link <?php if($first_part=="reports.php"){echo "active";}else{echo "";}?>"><i class="fas fa-table"></i>&nbsp  Reports</a>
        </li>
        <li class="side_nav_item">
            <a href="#" class="side_nav_link"><i class="fas fa-chart-line"></i> &nbsp;Charts</a>
        </li>

        <li class="side_nav_item" id="side_drop">
            <a href="#" class="side_nav_link"><i class="fas fa-sort-down"></i> &nbsp;Dropdown</a>
            <ul class="side_drop_sub">
                <li class="drop_sub_item">
                    <a href="#" class="drop_sub_link">drop item 1</a>
                </li>
                <li class="drop_sub_item">
                    <a href="#" class="drop_sub_link">drop item 2</a>
                </li>
            </ul>
        </li>
    </ul>
</div>