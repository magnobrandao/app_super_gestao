<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Super Gestão - Sobre Nós</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">


</head>

<body>
    <div class="topo">

        <div class="logo">
            <a href="<?php echo e(route('site.index')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>"></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="<?php echo e(route('site.index')); ?>">Principal</a></li>
                <li><a href="<?php echo e(route('site.sobrenos')); ?>">Sobre Nós</a></li>
                <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Gestão - Magno Brandão</h1>
                <p>Software para gestão empresarial para empresa.<p>
                        <div class="chamada">
                            <img src="<?php echo e(asset('img/check.png')); ?>">
                            <span class="texto-branco">Gestão completa e descomplicada</span>
                        </div>
                        <div class="chamada">
                            <img src="<?php echo e(asset('img/check.png')); ?>">
                            <span class="texto-branco">Sua empresa na nuvem</span>
                        </div>
            </div>

            <div class="video">
                <img src="<?php echo e(asset('img/player_video.jpg')); ?>">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida, entre em contato comigo pelo formulário abaixo.<p>
                        <form>
                            <input type="text" placeholder="Nome" class="borda-branca">
                            <br>
                            <input type="text" placeholder="Telefone" class="borda-branca">
                            <br>
                            <input type="text" placeholder="E-mail" class="borda-branca">
                            <br>
                            <select class="borda-branca">
                                <option value="">Qual o motivo do contato?</option>
                                <option value="">Dúvida</option>
                                <option value="">Elogio</option>
                                <option value="">Reclamação</option>
                            </select>
                            <br>
                            <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                            <br>
                            <button type="submit" class="borda-branca">ENVIAR</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/magno/Documents/code/app_super_gestao/resources/views/site/principal.blade.php ENDPATH**/ ?>