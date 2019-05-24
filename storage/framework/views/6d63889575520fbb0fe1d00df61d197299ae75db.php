<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                        <h4 style="text-align: center">Create New Action</h4>
                </div>
    
                    <div class="card-body">
                    <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="action_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Action Name')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="action_name" name="action_name" type="text" class="form-control" required>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
    
                                <div class="col-md-6">
                                        <select name="type" id="type">
                                            <option value="positive">Positive</option>
                                            <option value="negative">Negative</option>
                                        </select>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create Action
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