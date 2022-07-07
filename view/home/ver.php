<!--Conteudo da Página-->
<hr>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <img src="<?= $produto['foto'] ?>">
        </div>
        <div class="col-6">
            <h4><?= $produto['nome'] ?></h4>
            <strong>Marca <?= $produto['marca'] ?></strong>
            <h5>R$<?= $produto['preco'] ?></h5>
        </div>
        <div>
            <h4 class="mt-3" >Detalhes</h4>
            <hr>
            <?= $produto['descricao'] ?>
        </div>
    </div>

    <hr>
</div>