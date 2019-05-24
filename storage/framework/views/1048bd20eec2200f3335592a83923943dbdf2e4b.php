<?php $__env->startSection('content'); ?>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                    <a href="/registration" class= "btn btn-primary register">Add New User</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">User List</h4>
                            <p class="category">All User Lists</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($user->name); ?> 
                                                <td>
                                                    <a class='btn btn-primary' href = '/update/<?php echo e($user->id); ?>'>
                                                        Modify
                                                    </a>
                                                    
                                                    <a class='btn btn-primary' href = 'delete/<?php echo e($user->id); ?>'>
                                                        Delete
                                                    </a>
                                                    
                                                </td>
                                        </td>
                                    </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>