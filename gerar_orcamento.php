<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Orçamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Criar Orçamento</h2>
        <form action="gerar_orcamento.php" method="POST">
            <div class="mb-3">
                <label for="cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data do Orçamento</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="mb-3">
                <label for="servicos" class="form-label">Descrição dos Serviços</label>
                <textarea class="form-control" id="servicos" name="servicos" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor Total (R$)</label>
                <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="pagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-select" id="pagamento" name="pagamento" required>
                    <option value="Pix">Pix</option>
                    <option value="Boleto">Boleto</option>
                    <option value="Cartão (2x)">Cartão (2x)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Gerar Orçamento</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <hr class="my-5">
            <h3>Orçamento Gerado</h3>
            <div class="border p-4">
                <p><strong>Cliente:</strong> <?= htmlspecialchars($_POST['cliente']) ?></p>
                <p><strong>Data:</strong> <?= htmlspecialchars($_POST['data']) ?></p>
                <p><strong>Serviços:</strong></p>
                <p><?= nl2br(htmlspecialchars($_POST['servicos'])) ?></p>
                <p><strong>Valor Total:</strong> R$ <?= number_format($_POST['valor'], 2, ',', '.') ?></p>
                <p><strong>Forma de Pagamento:</strong> <?= htmlspecialchars($_POST['pagamento']) ?></p>
                <p class="text-muted">Este orçamento é válido por 5 dias.</p>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
