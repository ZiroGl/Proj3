<?php
include_once '../config/config.php';
include_once '../classes/Produtos.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = new Produtos ($db);

    $descricao = $_POST['descricao'];
    $valorCusto = $_POST['valorCusto'];
    $valorVenda = $_POST['valorVenda'];
    $referencia = $_POST['referencia'];
    

    $usuario->registrar($descricao, $valorCusto, $valorVenda, $referencia);
    header('Location: ../gerenciamento/gerenciarProduto.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastrar Produto</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="../styles/styleCadUsuario.css">
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <header>
        <img src="../assets/img/logo.png" alt="Logo" class="small-img">
        <h1 class="le title-container">Cadastro de Usuários</h1>
        <a href="../gerenciamento/gerenciarUsuarios.php" class="btn-voltar"><ion-icon name="arrow-undo"></ion-icon></a>
    </header>

    <main>
        <br><br><br>
        <div class="container mx-auto shadow ">
            <h1 class="text-center title-container">Cadastrar Usuário</h1>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label>Tipo:</label>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" id="admin" name="tipo" value="admin" required> Administrador
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="funcionario" name="tipo" value="funcionario" required>
                                Funcionário
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Sexo:</label>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" id="masculino" name="sexo" value="M" required> Masculino
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="feminino" name="sexo" value="F" required> Feminino
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome..."
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="text" name="senha" id="senha" class="form-control" placeholder="Senha..."
                                required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dataNasc">Data de Nascimento:</label>
                            <input type="date" name="dataNasc" id="dataNasc" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">Cpf:</label>
                            <input type="text" name="cpf" id="cpf" class="form-control"
                                oninput="applyMask(this, cpfMask)" placeholder="Cpf..." maxlength="14" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" name="celular" id="celular" class="form-control"
                                placeholder="Telefone..." maxlength="15" oninput="applyMask(this, phoneMask)" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail..."
                                required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endCidade">Cidade:</label>
                            <input type="text" name="endCidade" id="endCidade" class="form-control"
                                placeholder="Cidade..." required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endBairro">Bairro:</label>
                            <input type="text" name="endBairro" id="endBairro" class="form-control"
                                placeholder="Bairro..." required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endRua">Rua/Logradouro:</label>
                            <input type="text" name="endRua" id="endRua" class="form-control"
                                placeholder="Rua/Logradouro..." required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endNum">Número:</label>
                            <input type="text" name="endNum" id="endNum" class="form-control" placeholder="Número..."
                                required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="endComplemento">Complemento:</label>
                            <input type="text" name="endComplemento" id="endComplemento" class="form-control"
                                placeholder="Complemento..." required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-cad">
                    <i class="fa fa-plus"></i> Cadastrar
                </button>
            </form>
        </div>
    </main>

    <!-- Bootstrap JS, jQuery, and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        function applyMask(input, maskFunction) {
            input.value = maskFunction(input.value);
        }

        // Máscara para CPF
        function cpfMask(value) {
            return value
                .replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }

        // Máscara para CEP
        function cepMask(value) {
            return value
                .replace(/\D/g, '')
                .replace(/(\d{5})(\d)/, '$1-$2');
        }

        // Máscara para Telefone
        function phoneMask(value) {
            return value
                .replace(/\D/g, '')
                .replace(/(\d{2})(\d)/, '($1) $2')
                .replace(/(\d{5})(\d{1,4})$/, '$1-$2');
        }
    </script>

</body>

</html>