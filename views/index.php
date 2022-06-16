<?php include('_head.php'); ?>
<style>
    body {
        background-color: #F95555;
    }
    .login-form {
        margin-top: 10%;
    }
    .card {
        border-radius: 10px;
        max-width: 35%;
        width: 35%;
        height: 300px;
    }
    .form-login {
        margin-top: 30px;
    }
    .card-title {
        margin-top: 10px;
    }
    #enviar {
        border: none;
        background-color: #F95555;
        color: white; 
    }
    .input-field {
        margin: 10px 0;
        width: 100%;
        height: 40px !important;
    }
</style>
<section class="container-fluid login-form">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title">Login do funcionário</h3>
                <div class="form-login">
                    <form action="" method="POST">
                        <div class="nome">
                            <input type="text" class="input-field" name="nome-funcionario" id="nome-funcionario" placeholder="Nome do funcionário">
                        </div>
                        <div class="senha">
                            <input type="password" class="input-field" name="senha-funcionario" id="senha-funcionario" placeholder="Senha do funcionário">
                        </div>
                        <div class="submit">
                            <input type="submit" class="input-field" name="enviar" id="enviar" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>