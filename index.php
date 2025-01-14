<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
            rel="stylesheet"
        />
        <title>Curso PHP</title>
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <main class="principal">
          <div class="conteudo">
            <nav class="modulos">
              <div class="modulo verde">
                <h3>Módulo 01 - Básico </h3>
                <ul>
                  <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                  <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                  <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                  <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                  <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                </ul>
              </div>
              <div class="modulo vermelho">
                <h3>Módulo 02 - Tipos </h3>
                <ul>
                  <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </main>
        <footer class="rodape">
          COD3R & ALUNOS &copy; <?= date('Y') ?>
        </footer>
    </body>
</html>
