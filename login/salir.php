<?php
session_start();
session_destroy();
echo "
<script>
    alert('Sesion cerrada');
    location.href = 'login.php';
</script>
";
?>