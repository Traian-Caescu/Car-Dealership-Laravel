<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<a href="/" class="inline-block text-black"><h5>Back</h5></a>
            <div class="mx-4">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <div class="flex flex-col items-center justify-center text-center">
						<!-- if there is no image inserted by the user then the no-image.png will be added, option to add image not implemented 
						code checks if there is an image in storage uploaded by the user to upload for the advertisement-->
                        <img
                            class="w-48 mr-6 mb-6"
                            src="<?php echo e($listing->logo ? asset ('storage/' . $listing->logo) : asset('/images/no-image.png')); ?>"
                            alt=""/>
							
							<!-- get the specific data of the listing items using $listing -> variablename -->
                        <h3 class="text-2xl mb-2"><?php echo e($listing->title); ?></h3>
                        <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>
                        
                        <!-- create the tags, read them as csv files from the database -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.listing-tags','data' => ['tagsCsv' => $listing->tags]]); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        
                        
                        <div class="text-lg my-4">
                            <?php echo e($listing->location); ?>

                        </div>
                        <div class="border border-black w-full mb-7"></div>
                        <div>
                            <h1 class="font-bold mb-5">Description</h1>
                            <p><?php echo e($listing->description); ?></p>
                            
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                
                <!--open an id webpage to edit a specific listing item -->
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['class' => 'mt-4 pt-2 flex space-x-6']]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-4 pt-2 flex space-x-6']); ?>
					<a href="/listings/<?php echo e($listing->id); ?>/edit"> Edit |
					</a>
					<!-- send a request in order to delete -->
					<form method="POST" action="/listings/<?php echo e($listing->id); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button> | Delete</button>
					
					</form>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/student/baguette_website/resources/views/listings/show.blade.php ENDPATH**/ ?>