<?php include('config.php'); ?>
<form method="POST" action="create_customer_action.php">
    <input type="text" name="firstname" placeholder="Nombre" required>
    <input type="text" name="lastname" placeholder="Apellido" required>
    <input type="email" name="email" placeholder="Correo" required>
    <button type="submit">Crear Cliente</button>
</form>
