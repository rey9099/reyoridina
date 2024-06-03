<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row justify-content-between align-text-center">
                <h1 class="fw-bold">All Students</h1>
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary px-5 py-3">Create Student</a>
            </div>
            <table class="table">
                <thead>





                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">address</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Pob</th>
                    <th scope="col">Age</th>
                  </tr>


                </thead>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($key +=1); ?></th>
                    <td><?php echo e($student->std_name); ?></td>
                    <td><?php echo e($student->std_address); ?></td>
                    <td><?php echo e($student->std_dob); ?></td>
                    <td><?php echo e($student->std_pob); ?></td>
                    <td><?php echo e($student->std_age); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-practice\resources\views/student/index.blade.php ENDPATH**/ ?>