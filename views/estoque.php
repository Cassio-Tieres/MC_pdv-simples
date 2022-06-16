<?php include('_head.php');
      include('_header.php'); ?>

<section class="container-fluid mt-5">
    <div class="row">
        <h2>Estoque</h2>
        <p>Cadastrar produto</p>
        <div class="row form-produtos">
            <form action="">
                <div class="nome-produto mb-2">
                    <input type="text" name="nome-produto" id="nome-produto" placeholder="Nome do produto">
                </div>
                <div class="preco-produto">
                    <input type="text" name="preco-produto" id="preco-produto" placeholder="Preço do produto">
                </div>
                <div class="submit-venda mt-2">
                <input type="submit" value="Registrar produto" name="registrar-produto" class="submit-vender">
            </div>
            </form>
        </div>
    </div>
</section>

<section class="container-fluid mt-5" style="border-top: 1px solid black;">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include('_footer.php'); ?>