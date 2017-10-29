<?php
// Basic PHP health check page that can be used for ELB health checks
echo "HEALTH OK\n";
echo http_response_code();
?>