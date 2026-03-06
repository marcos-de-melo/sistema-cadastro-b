<h2>Cadastro de Usuários</h2>

<form action="" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="dataNascUsuario">Data de Nascimento:</label>
        <input type="date" name="dataNascUsuario" id="dataNascUsuario" required>
    </div>
    <div>
        <label for="senhaUsuario">Senha:</label>
        <input type="password" name="senhaUsuario" id="senhaUsuario" required>
    </div>
    <div>
        <label for="obsUsuario">Observação:</label>
        <textarea name="obsUsuario" id="obsUsuario"></textarea>
    </div>

    <div>
        <input type="submit" value="Cadastrar">       
    </div>
</form>