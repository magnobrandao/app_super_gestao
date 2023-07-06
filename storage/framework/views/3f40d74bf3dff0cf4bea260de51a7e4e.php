<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>


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
                    <?php $__env->startComponent('site.layouts._components.form_contato', ['classe'=> 'borda-branca']); ?>

                    <?php echo $__env->renderComponent(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/magno/Documents/code/app_super_gestao/resources/views/site/principal.blade.php ENDPATH**/ ?>