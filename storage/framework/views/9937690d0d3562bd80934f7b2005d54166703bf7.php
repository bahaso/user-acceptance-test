<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                        <h4 style="text-align: center">Create New Feature </h4>
                </div>
    
                    <div class="card-body">
                    <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="features_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Feature Name')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="features_name" name="features_name" type="text" class="form-control" required>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
    
                                <div class="col-md-6">
                                        <textarea id="description" rows = "5" cols = "50" name = "description">
                                               
                                        </textarea>

                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create Feature
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