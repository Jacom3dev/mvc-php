<?php
    if (!isset($_SESSION["validate"]) || $_SESSION["validate"] != "ok") {
        header("Location:index.php?page=login");
        return;
    }
    $users = UserController::getUsers();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $value):?>
            <tr>
                <td><?php echo ($key+1) ?></td>
                <td><?php echo $value["name"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><?php echo $value["created_at"] ?></td>
                <td>
                    <div class="btn-group d-flex">
                        <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        <?php endforeach?>
       
    </tbody>
</table>