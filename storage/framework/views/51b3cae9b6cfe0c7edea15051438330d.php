<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row justify-content-between align-text-center">
                <h1 class="fw-bold">All Events</h1>
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary px-5 py-3">Create Event</a>
            </div>


            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Start Date Time</th>
                    <th scope="col">End Date Time</th>
                    <th scope="col">Event Type</th>
                    <th scope="col">Event Description</th>
                  </tr>


                </thead>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($key +=1); ?></th>
                    <td><?php echo e($student->std_startdatetime); ?></td>
                    <td><?php echo e($student->std_enddatetime); ?></td>
                    <td><?php echo e($student->std_eventtype); ?></td>
                    <td><?php echo e($student->std_eventdescription); ?></td>

                    <td>
                      <a href="<?php echo e(route('student.edit', $student->id)); ?>" class="btn btn-warning">Update</a>
                      <form action="<?php echo e(route('student.destroy', $student->id)); ?>" method="POST" class="d-inline">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          <button type="submit" class="btn btn-danger">Destroy</button>
                      </form>
                  </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-practicee\resources\views/student/index.blade.php ENDPATH**/ ?>