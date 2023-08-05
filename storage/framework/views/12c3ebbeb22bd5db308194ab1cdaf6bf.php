<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
    <div>Topics</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h2>Create topic</h2>
    <form action="<?php echo e(route('topic.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="topicTitle" class="form-label">Topic title</label>
            <input type="text" class="form-control" id="topicTitle" name="title" placeholder="Enter topic..."
                class="<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <input type="submit" value="Create" class="btn btn-sm btn-primary">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\larablog\resources\views/topic/create.blade.php ENDPATH**/ ?>