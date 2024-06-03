

<?php $__env->startSection('content'); ?>

<div class="container  mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold">Create Event</h1>

            <form action="<?php echo e(route('students.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="start_datetime">Start Date Time</label>
                    <input type="datetime-local" name="start_datetime" class="form-control" id="start_datetime" required>
                </div>

                <div class="form-group">
                    <label for="end_datetime">End Date Time</label>
                    <input type="datetime-local" name="end_datetime" class="form-control" id="end_datetime" required>
                </div>

                <div class="form-group">
                    <label for="event_type">Event Type</label>
                    <input type="text" name="event_type" class="form-control" id="event_type" required>
                </div>

                <div class="form-group">
                    <label for="event_description">Event Description</label>
                    <textarea name="event_description" class="form-control" id="event_description" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Event</button>
                
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-practice\resources\views/student/create.blade.php ENDPATH**/ ?>