<?php
remove_action("wp_head", "wp_generator");

require ('inc/enqueue-scripts.php');
require ('inc/theme-setup.php');