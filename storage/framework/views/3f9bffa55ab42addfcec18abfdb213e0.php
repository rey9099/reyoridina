

<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold">Create Tag</h1>

            <form action="<?php echo e(route('students.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="tag_name">Tag Name</label>
                    <input type="text" name="tag_name" class="form-control" id="tag_name" required>
                </div>

                <div class="form-group">
                    <label for="tag_description">Tag Description</label>
                    <input type="text" name="tag_description" class="form-control" id="tag_description" required>
                </div>

                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary">Create Tag</button>

            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\oridina\resources\views/student/create.blade.php ENDPATH**/ ?>