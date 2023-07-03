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


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o Super Gestão feito por Magno Brandão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar empresas.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do seu negócio!</p>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="<?php echo e(asset('img/facebook.png')); ?>">
            <img src="<?php echo e(asset('img/linkedin.png')); ?>">
            <img src="<?php echo e(asset('img/youtube.png')); ?>">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(71) 99310-2615</span>
            <br>
            <span>magnoboc@gmail.com</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="<?php echo e(asset('img/mapa.png')); ?>">
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/magno/Documents/code/app_super_gestao/resources/views/site/sobre-nos.blade.php ENDPATH**/ ?>