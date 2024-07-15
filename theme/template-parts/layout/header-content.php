<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package La-nota
 */

?>

<div class="relative w-full max-w-screen-xl mx-auto flex flex-row items-center py-6 px-5 gap-x-10 lg:gap-x-40">
	<a href="">
		<?php if ((is_home() || is_page('hijb')) && !is_front_page()) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hijb-logo.png" alt="" class="rounded-lg block h-full object-cover">
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/la-nota-logo.png" alt="" class="rounded-lg block h-full object-cover">
		<?php endif; ?>
	</a>
	<div class="rounded-lg w-full max-w-3xl p-3 bg-[#F1F3F7]">
		<div class="w-full h-[90px] bg-[#D6CCFF]"></div>
	</div>
</div>

<?php if ((is_home() || is_page('hijb')) && !is_front_page()) : ?>
	<header class="bg-[#F9F9F9]">
		<div class="w-full max-w-screen-xl mx-auto px-5 flex flex-row items-center justify-end lg:justify-between gap-x-2">
			<nav id="navigation" class="hidden lg:flex w-full h-screen lg:h-auto flex-col lg:flex-row items-center gap-x-1 absolute lg:static left-0 bg-white lg:bg-inherit z-50 <?php echo is_user_logged_in() ? 'top-10' : 'top-0' ?>">
				<ul id="nav-links" class="w-full h-screen md:h-auto md:w-fit flex flex-col gap-y-5 lg:flex-row lg:items-center gap-x-1 px-5 lg:px-0 text-green-hijb2 text-sm font-bold">
					<a id="nav-link" href="#" class="close block p-2.5 cursor-pointer self-end lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-10 self-end fill-black pointer" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
						</svg>
					</a>
					<li><a href="<?php echo esc_url(home_url('/programas')); ?>" class="block w-full md:w-fit px-1 py-2">Programas</a></li>
					<li><a href="<?php echo esc_url(home_url('/programas-detalles')); ?>" class="block w-full md:w-fit px-1 py-2">Programación</a></li>
					<li><a href="<?php echo esc_url(home_url('/podcast')); ?>" class="block w-full md:w-fit px-1 py-2">Podcasts</a></li>
					<li><a href="<?php echo esc_url(home_url('/musica')); ?>" class="block w-full md:w-fit px-1 py-2">Musica</a></li>
					<li><a href="<?php echo esc_url(home_url('/actualidad')); ?>" class="block w-full md:w-fit px-1 py-2">Actualidad</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>" class="rounded-lg inline w-full px-2 py-1 text-s-b text-white bg-[#FF0000]">En vivo</a></li>
					<li><a href="<?php echo esc_url(home_url('/inicio')); ?>" class="block w-full md:w-fit px-1 py-2">LA NOTA</a></li>
				</ul>
			</nav>

			<div class="flex flex-row items-center gap-x-5">
				<!-- search input -->
				<div class="absolute top-20 left-0 md:top-0 md:static w-full px-2.5 lg:px-0">
					<div id="input-search" class="hidden md:relative">
						<input id="search-bar" type="search" placeholder="¿Qué andas buscando?" class="border border-gray-1000 rounded-lg w-full md:w-[232px] px-3.5 py-3.5 placeholder:text-gray-200 text-s outline-none">
						<svg xmlns="http://www.w3.org/2000/svg" id="search-icon" class="absolute top-2/4 right-3.5 -translate-y-2/4 h-4 fill-blue-900" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
						</svg>
					</div>
				</div>
				<!--  -->
				<ul class="relative flex flex-row items-center gap-x-4">
					<!-- input toggler icon -->
					<a href="#" id="search-toggler" class="cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-green-hijb2 hover:fill-lightBlue" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
						</svg>
					</a>
					<a href="#" id="search-close" class="hidden">
						<span class="cursor-pointer rounded-full w-6 h-6 flex items-center justify-center bg-green-hijb2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
							</svg>
						</span>
					</a>
					<li>
						<a href="" class="px-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-green-hijb2 hover:fill-lightBlue" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
							</svg>
						</a>
					</li>
					<a href="#" id="navbar-toggler" class="block lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-green-hijb2" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
						</svg>
					</a>
				</ul>
			</div>
		</div>
	</header>
<?php else : ?>
	<header class=" bg-[#F7840C]">
		<div class="w-full max-w-screen-xl mx-auto px-5 flex flex-row items-center justify-end lg:justify-between gap-x-2">
			<nav id="navigation" class="hidden lg:flex w-full h-screen lg:h-auto flex-col lg:flex-row items-center gap-x-1 absolute lg:static left-0 bg-white lg:bg-inherit z-50 <?php echo is_user_logged_in() ? 'top-10' : 'top-0' ?>">
				<ul id="nav-links" class="w-full h-screen md:h-auto md:w-fit flex flex-col gap-y-5 lg:flex-row lg:items-center gap-x-1 px-5 lg:px-0 text-white text-sm font-bold">
					<a id="nav-link" href="#" class="close block p-2.5 cursor-pointer self-end lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-10 self-end fill-black pointer" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
						</svg>
					</a>
					<li><a href="<?php echo esc_url(home_url('/programas')); ?>" class="block w-full md:w-fit px-1 py-2">Programas</a></li>
					<li><a href="<?php echo esc_url(home_url('/programas-detalles')); ?>" class="block w-full md:w-fit px-1 py-2">Programación</a></li>
					<li><a href="<?php echo esc_url(home_url('/podcast')); ?>" class="block w-full md:w-fit px-1 py-2">Podcasts</a></li>
					<li><a href="<?php echo esc_url(home_url('/musica')); ?>" class="block w-full md:w-fit px-1 py-2">Musica</a></li>
					<li><a href="<?php echo esc_url(home_url('/actualidad')); ?>" class="block w-full md:w-fit px-1 py-2">Actualidad</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>" class="rounded-lg inline w-full px-2 py-1 text-s-b text-white bg-[#FF0000]">En vivo</a></li>
					<li><a href="<?php echo esc_url(home_url('/hijb')); ?>" class="block w-full md:w-fit px-1 py-2">HIJB</a></li>
				</ul>
			</nav>

			<div class="flex flex-row items-center gap-x-5">
				<!-- search input -->
				<div class="absolute top-20 left-0 md:top-0 md:static w-full px-2.5 lg:px-0">
					<div id="input-search" class="hidden md:relative">
						<input id="search-bar" type="search" placeholder="¿Qué andas buscando?" class="border border-gray-1000 rounded-lg w-full md:w-[232px] px-3.5 py-3.5 placeholder:text-gray-200 text-s outline-none">
						<svg xmlns="http://www.w3.org/2000/svg" id="search-icon" class="absolute top-2/4 right-3.5 -translate-y-2/4 h-4 fill-blue-900" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
						</svg>
					</div>
				</div>
				<!--  -->
				<ul class="relative flex flex-row items-center gap-x-4">
					<!-- input toggler icon -->
					<a href="#" id="search-toggler" class="cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white hover:fill-lightBlue" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
						</svg>
					</a>
					<a href="#" id="search-close" class="hidden">
						<span class="cursor-pointer rounded-full w-6 h-6 flex items-center justify-center bg-[#F6F6F6]">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 fill-[#111111]" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
							</svg>
						</span>
					</a>
					<li>
						<a href="" class="px-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white hover:fill-lightBlue" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
							</svg>
						</a>
					</li>
					<a href="#" id="navbar-toggler" class="block lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
						</svg>
					</a>
				</ul>
			</div>
		</div>
	</header>
<?php endif; ?>