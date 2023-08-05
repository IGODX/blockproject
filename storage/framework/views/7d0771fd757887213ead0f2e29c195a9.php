<?php $__env->startSection('content'); ?>
    <div class="container" id="main">
        <div class="row">
            <div class="col-3">
            <?php $__env->startSection('sidebar'); ?>
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-3"><a style="text-decoration: none"
                            href="<?php echo e(route('home.index', ['id' => $topic->id])); ?>"><?php echo e($topic->title); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->yieldSection(); ?>
        </div>
        <div class="col-1"></div>
        <div class="col-8">
            <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mb-5">
                    <h2><?php echo e($block->title); ?></h2>
                    <p><?php echo e($block->content); ?></p>
                    <img src="<?php echo e($block->imagepath); ?>" alt="<?php echo e($block->imagepath); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\larablog\resources\views/home/index.blade.php ENDPATH**/ ?>