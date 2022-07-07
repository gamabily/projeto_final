

<!--Conteudo da Página-->
<div class="container mt-2">
    <h1>Lista de Usuários</h1>
    <hr>

    <a href="<?= base_url(). "?c=usuario&m=add"?>" class="btn btn-success">Inserir um Usuário</a>
    <table class="table table-hover table-responsive ">
        <thead>
            <tr>
                <th class="col-10">Login</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['login']; ?></td>
                <td>
                    <a href="<?= base_url()?>?c=usuario&m=excluir&id=<?= $usuario['idusuario']; ?>" class='btn btn-danger'><i class="fa-solid fa-trash-can" title="Excluir"></i>Excluir</a>
                    <a href="<?= base_url()?>?c=usuario&m=editar&id=<?= $usuario['idusuario']; ?>" class='btn btn-primary'><i class="fa-solid fa-pencil" title="Atualizar"></i>Atualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

