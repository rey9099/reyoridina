

<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold">Create Position</h1>

            <form action="<?php echo e(route('students.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="position_name">Position Name</label>
                    <input type="text" name="position_name" class="form-control" id="position_name" required>
                </div>

                <div class="form-group">
                    <label for="position_description">Position Description</label>
                    <input type="text" name="position_description" class="form-control" id="position_description" required>
                </div>


                <button type="submit" class="btn btn-primary">Create Position</button>
                
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-practice-romeo\resources\views/student/create.blade.php ENDPATH**/ ?>