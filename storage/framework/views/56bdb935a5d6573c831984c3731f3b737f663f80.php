<?php $__env->startSection('content'); ?>
<div class="row top-15">
    <div class="col">
        <h5><?php echo e($sub_title); ?></h5>
        <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e(asset($product->getImage())); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="product.html" title="View Product"><?php echo e($product->name); ?></a></h4>
                        <p class="card-text"><?php echo e($product->description); ?></p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block"><?php echo e($product->price); ?> $</p>
                            </div>
                            <div class="col">
                                <form method="POST" action="<?php echo e(route('cart.add')); ?>" class="form-inline my-2 my-lg-0" >
                                    <?php echo csrf_field(); ?>
                                    <input name="id" type="hidden" value="<?php echo e($product->id); ?>">
                                    <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/onlinestore/resources/views/index.blade.php ENDPATH**/ ?>