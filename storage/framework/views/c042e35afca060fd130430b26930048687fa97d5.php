<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body app-home">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Group Name</th>
                        <th class="text-center">Group Type</th>
                        <th class="text-center">Account Name</th>
                        <th>Post Text</th>
                        <th class="text-center">Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bufferPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bufferPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($bufferPost->accountInfo->name); ?></td>
                                <td class="text-center"><?php echo e($bufferPost->accountInfo->type); ?></td>
                                <td class="text-center">
                                    <img class="images-circle" width="50px" height="50px" src="<?php echo e($bufferPost->accountInfo->avatar); ?>">
                                </td>
                                <td><?php echo e($bufferPost->post_text); ?></td>
                                <td class="text-center"><?php echo e($bufferPost->sent_at); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
                <div class="pagination">
              <?php echo e($bufferPosts->links()); ?>

          </div>
            </div>
          </div>
        
          
          
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>