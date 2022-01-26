<?php include __DIR__ . '/../inicio-html.php'; ?>
    <form action="/realiza-login" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" type="email" name="email" id="email" class="form-control" placeholder="Informe seu e-mail">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha">
        </div>
        <button class="btn btn-primary btn-lg">Entrar</button>
    </form>
<?php include __DIR__ . '/../fim-html.php';