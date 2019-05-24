<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                        <h4 style="text-align: center">Create New Project </h4>
                </div>
    
                    <div class="card-body">
                    <form method="POST" action="<?php echo e(url('/createProject')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="project_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Project Name')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="project_name" name="project_name" type="text" class="form-control" required>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="platform" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Platform')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="platform" name="platform" type="text" class="form-control" required>

                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="version" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Version')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="version" name="version" type="text">
    
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create Project
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>