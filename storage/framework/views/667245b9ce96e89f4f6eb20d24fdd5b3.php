

<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold">Create Street</h1>

            <form action="<?php echo e(route('students.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="start_datetime">Street Name</label>
                    <input type="text" name="start_datetime" class="form-control" id="start_datetime" required>
                </div>

                <div class="form-group">
                    <label for="end_datetime">Street Description</label>
                    <input type="text" name="end_datetime" class="form-control" id="end_datetime" required>
                </div>


                <button type="submit" class="btn btn-primary">Create Street</button>
                
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-practice-bimby\resources\views/student/create.blade.php ENDPATH**/ ?>