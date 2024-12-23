<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users");

// jika ada post dari name submit
if (isset($_POST['Submit'])) {
	if (mysqli_num_rows($result) > 0) {
		$email  =    $_POST['email'];
		$password  =    $_POST['password'];
		$isSuccess =	false;
		$isAdmin =	false;

		echo "<script>console.log('Debug Objects: " . $email . "' );</script>";

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<script>console.log('Debug Objects: " . $row["email"] . "' );</script>";
			if ($row["email"] === $email && $row["password"] === $password) {
				$isSuccess = true;

				if ($row["isAdmin"]) {
					$isAdmin =	true;
				}
			}
		}


		if ($isAdmin) {
			echo "<script type='text/javascript'>alert('Selamat Datang Admin');</script>";
			header("Location:admin.php");
		}
		else if ($isSuccess) {
			echo "<script type='text/javascript'>alert('Sukses Login');</script>";
			header("Location:user.php");
		} else {
			echo "<script type='text/javascript'>alert('Email / Password Salah');</script>";
		}
	}

	// echo "<script>console.log('Debug Objects: " . $password . "' );</script>";
	// echo "<script>console.log('Debug Objects:' );</script>";

	// $result = mysqli_query($mysqli, "INSERT INTO todos (title, task_date, is_completed) VALUES ('$title', '$date', $isCompleted)");
	// echo "Berhasil menambahkan data!.";
}
?>


<!doctype html>
<html>

<head>
	<title>Lucky Software House</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						clifford: "#da373d",
					},
				},
			},
		};
	</script>
	<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
	<!-- ##### Header Component ##### -->
	<header
		class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
		<div class="flex-1 flex justify-between items-center">
			<a href="index.php" class="text-xl font-extrabold">Lucky Software House</a>
		</div>

		<label for="menu-toggle" class="pointer-cursor md:hidden block">
			<svg
				class="fill-current text-gray-900"
				xmlns="http://www.w3.org/2000/svg"
				width="20"
				height="20"
				viewBox="0 0 20 20">
				<title>menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
			</svg>
		</label>
		<input class="hidden" type="checkbox" id="menu-toggle" />

		<div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
			<nav>
				<ul
					class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
					<li>
						<a class="md:p-4 py-3 px-0 block" href="calculate.html">Calculate</a>
					</li>
					<li>
						<a class="md:p-4 py-3 px-0 block" href="index.php#product">Product/Services</a>
					</li>
					<li>
						<a class="md:p-4 py-3 px-0 block" href="index.php#portfolio">Portfolio</a>
					</li>
					<li>
						<a
							class="md:p-4 py-3 px-0 block md:mb-0 mb-2"
							href="index.php#about">About Us</a>
					</li>
					<li>
						<a
							class="md:p-4 py-3 px-0 block md:mb-0 mb-2"
							href="index.php#contact">Contact</a>
					</li>
					<li>
						<a class="md:p-4 py-3 px-0 block" href="signin.php">Login</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- ##### Section Component ##### -->
	<section>
		<!-- ##### Signin Component ##### -->
		<form
			class="mx-auto flex min-h-[calc(100vh-144px)] w-full items-center justify-center text-black"
			action="signin.php"
			method="post">
			<div class="flex w-[30rem] flex-col space-y-10">
				<div class="text-center text-4xl font-medium">Log In</div>

				<div
					class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
					<input
						name="email"
						type="text"
						placeholder="Email"
						class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
				</div>

				<div
					class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
					<input
						name="password"
						type="password"
						placeholder="Password"
						class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
				</div>

				<button
					class="transform py-2 font-semibold text-white transition-colors bg-gray-900 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-offset-2 focus:ring focus:ring-gray-200 px-7 dark:bg-white dark:text-black"
					name="Submit"
					type="submit">
					LOG IN
				</button>

				<a
					href="#"
					class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a>

				<p class="text-center text-lg">
					No account?
					<a
						href="register.php"
						class="font-medium text-indigo-500 underline-offset-4 hover:underline">Create One</a>
				</p>
			</div>
		</form>
	</section>
	<!-- ##### Footer Component ##### -->
	<footer class="bg-gray-800 text-white py-4">
		<div class="container mx-auto text-center">
			<p>&copy; 2024 Lucky Software House. All rights reserved.</p>
		</div>
	</footer>
</body>

</html>