<div class="d-flex justify-content-center">
    <form class="p-5 bg-light col-6" method="post">
        <div class="form-group">
            <label for="email">Correo electronico:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email">
            </div> 
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock"></i></span>
                </div>
                <input type="password" class="form-control" name="password">
            </div> 
            
        </div>
        <?php 
            $login = UserController::login();
            print_r($login);
            if ($login == "ok") {
              echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
              </script>';
              echo '<div class="alert alert-success">El usuario se ha creado correctamente</div>';
            }
        ?>
        <input type="submit" value="iniiciar sesion" name="login" class="btn btn-primary">
    </form>
</div>  
