<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncie Seu Imóvel - ANAGE Imóveis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="anuncie">
    <div class="container">
        <h1>Anuncie Seu Imóvel</h1>
        <p>Preencha o formulário abaixo para anunciar seu imóvel conosco.</p>
        <form action="processa_anuncio.php" method="POST">
            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Seu Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Seu Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço do Imóvel:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Imóvel:</label>
                <select id="tipo" name="tipo" required>
                    <option value="apartamento">Apartamento</option>
                    <option value="casa">Casa</option>
                    <option value="comercial">Imóvel Comercial</option>
                    <option value="terreno">Terreno</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição do Imóvel:</label>
                <textarea id="descricao" name="descricao" rows="6" required></textarea>
            </div>
            <button type="submit" class="cta-button">Enviar Anúncio</button>
        </form>
    </div>
</section>