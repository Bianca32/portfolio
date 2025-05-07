<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Andreara MediaWorks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Gradiente de fundo semelhante ao seu design */
        body {
            background: linear-gradient(135deg, #b8e0f4, #f8d3e3, #d3f8e2);
            background-size: 200% 200%;
            animation: gradient 10s ease infinite;
            color: #333;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
        }

        h2, h3 {
            color: #555;
        }

        .portfolio img {
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .portfolio img:hover {
            transform: scale(1.05);
        }

        footer {
            margin-top: auto;
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Andreara MediaWorks</a>
        </div>
    </nav>

    <section class="portfolio my-5">
        <div class="container">
            <h2 class="text-center mb-4">Meu Portfólio</h2>
            <div class="row">
                <!-- Imagens -->
                <div class="col-md-4 mb-4">
                    <img src="Novapasta/portfolio1.png" class="img-fluid" alt="Design 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="Novapasta/portfolio2.png" class="img-fluid" alt="Design 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="Novapasta/portfolio3.jpg" class="img-fluid" alt="Design 3">
                </div>
                <!-- Adicione mais imagens conforme necessário -->
            </div>

            <h3 class="text-center mt-5">Vídeos</h3>
            <div class="text-center">
                <div class="text-center">
                    <!-- Vídeos -->
                    <video controls width="70%" class="mb-4">
                        <source src="videos/video1.mp4" type="video/mp4">
                        Seu navegador não suporta vídeo.
                    </video>
                    <video controls width="70%" class="mb-4">
                        <source src="videos/video2.mp4" type="video/mp4">
                        Seu navegador não suporta vídeo.
                    </video>
                    <!-- Adicione mais vídeos conforme necessário -->
                </div>
            </div>

            <h3 class="text-center mt-5">Documentos PDF</h3>
            <div class="text-center">
                <!-- PDFs -->
                <div class="mb-4">
                    <a href="docs/documento1.pdf" target="_blank" class="btn btn-primary">Abrir Documento 1 (PDF)</a>
                </div>
                <div class="mb-4">
                    <a href="docs/documento2.pdf" target="_blank" class="btn btn-primary">Abrir Documento 2 (PDF)</a>
                </div>
                <!-- Adicione mais PDFs conforme necessário -->
            </div>

            <h3 class="text-center mt-5">Outros Documentos</h3>
            <div class="text-center">
                <!-- Outros documentos (ex.: documentos em Word ou apresentações) -->
                <div class="mb-4">
                    <a href="docs/documento3.docx" target="_blank" class="btn btn-primary">Abrir Documento 3 (Word)</a>
                </div>
                <div class="mb-4">
                    <a href="docs/documento4.pptx" target="_blank" class="btn btn-primary">Abrir Documento 4 (PowerPoint)</a>
                </div>
                <!-- Adicione mais documentos conforme necessário -->
            </div>
        </div>
    </section>

    <footer class="text-center">
        <p>&copy; 2024 Andreara MediaWorks - Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
