

<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold">Edit Position</h1>

            <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="position_name">Position Name</label>
                    <input type="text" name="position_name" class="form-control" id="position_name" value="<?php echo e($student->std_positionname); ?>" required>
                </div>

                <div class="form-group">
                    <label for="position_description">Position Description</label>
                    <input type="text" name="position_description" class="form-control" id="position_description" value="<?php echo e($student->std_positiondescription); ?>" required>
                </div>

                
                <button type="submit" class="btn btn-primary">Update Position</button>

            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\labarejos\resources\views/student/edit.blade.php ENDPATH**/ ?>