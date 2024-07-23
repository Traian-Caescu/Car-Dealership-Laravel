<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
			//theme color for the website
            tailwind.config = { theme: {extend: {colors: {laravel: "#7d0404",},},},};
        </script>
        <title>Advertisements</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-21" src="<?php echo e(asset('images/logo.png')); ?>" alt="" class="logo"
            /></a>
            <ul class="flex space-x-5 mr-5 text-lg">
				
				<?php if(auth()->guard()->check()): ?>
				<li><span class="font-bold uppercase">Welcome <?php echo e(auth()->user()->name); ?></span></li>
                
                
                <!--Log out, request -->
                <li>
					<form class="inline" method="POST" action="/logout">
					<?php echo csrf_field(); ?>
					<button type="submit">Log Out</button></form>
                </li>
				<?php else: ?>
                <li><a href="/register">Register |</a></li>
                <li><a href="/login">| Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
	<main>
		
	<?php echo $__env->yieldContent('content'); ?>
	</main>
	
  <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-20 mt-20 md:justify-center">
            <p class="ml-2">Traian-Dumitru Caescu | Copyright &copy; 2023 | Trading - 123</p>

            <a href="/listings/create" class="absolute top-1/3 right-7 bg-black">Post Advertisement</a>
        </footer>
    </body>
</html>
<?php /**PATH /home/student/baguette_website/resources/views/layout.blade.php ENDPATH**/ ?>