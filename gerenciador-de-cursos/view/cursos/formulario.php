<?php include __DIR__ . '/../inicio-html.php'; ?>
<form action="/salvar-curso<?= isset($curso) ? '?id='.$curso->getId() : '';?>" method="post">
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input class="form-control" 
               type="text" 
               id="descricao" 
               name="descricao"
               value="<?= isset($curso) ?$curso->getDescricao() : '';?>">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
<?php include __DIR__ . '/../fim-html.php';
