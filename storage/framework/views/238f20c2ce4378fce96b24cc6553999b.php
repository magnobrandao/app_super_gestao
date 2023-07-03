<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Magno Brandão - Contato</title>
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
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form>
                    <input type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
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
<?php /**PATH /home/magno/Documents/code/app_super_gestao/resources/views/site/contato.blade.php ENDPATH**/ ?>