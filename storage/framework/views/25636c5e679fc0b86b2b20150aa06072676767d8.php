<?php $__env->startSection('content'); ?>
           <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['class' => 'p-10 max-w-lg mx-auto mt-24']]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-10 max-w-lg mx-auto mt-24']); ?>
                    <header class="text-center">
                        <h2 class="font-bold uppercase mb-1">
                            Edit
                        </h2>
                        <p class="mb-4">Edit: <?php echo e($listing->title); ?></p>
                    </header>

                    <form method="POST" action="/listings/<?php echo e($listing->id); ?>" enctype="multipart/form-data">
						<!-- prevents cross side scripting attacks -->
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>
                        <div class="mb-7">
                            <label
                                for="company"
                                class="inline-block text-lg mb-2"
                                >Advertisement Name</label>
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="company" value="<?php echo e($listing->company); ?>"/>
                                
                                <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<p class="text-red-400 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-7">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Title</label
                            >
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="title"
                                placeholder="Example: Audi 2020" value="<?php echo e($listing->title); ?>"/>
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<p class="text-red-400 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-7">
                            <label
                                for="location"
                                class="inline-block text-lg mb-2"
                                >Location</label
                            >
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="location"
                                placeholder="Example: Manchester, London, etc" value="<?php echo e($listing->location); ?>"/>
                                <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<p class="text-red-400 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        

                        <div class="mb-7">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-black rounded p-2 w-full"
                                name="tags"
                                placeholder="Example: car type, year, milleage, etc" value="<?php echo e($listing->tags); ?>"/>
                                <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<p class="text-red-400 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

					
                        
					
                        <div class="mb-7">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Description
                            </label>
                            <textarea
                                class="border border-black rounded p-2 w-full"
                                name="description"
                                rows="10"
                                placeholder="Include properties, price etc"
                            ><?php echo e($listing->description); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<p class="text-red-400 text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-7">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
              <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/student/baguette_website/resources/views/listings/edit.blade.php ENDPATH**/ ?>