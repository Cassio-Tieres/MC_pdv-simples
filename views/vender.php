<?php include('_head.php');
      include('_header.php'); ?>

<section class="container-fluid mt-5">
    <div class="row">
        <h2>Vender</h2>
        <form action="" class="vender">
            <div class="cad-produtos">
                <select class="form-select select-produtos" aria-label="Default select example">
                    <option selected>Produto</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="qt-produtos">
                <input type="number" name="qt-produto" id="qt-produto" class="input-produtos">
            </div>
            <div class="submit-venda mt-2">
                <input type="submit" value="Registrar venda" name="registrar-venda" class="submit-vender">
            </div>
        </form>
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