<?php
include_once("config.php");


// jika ada post dari name submit
if (isset($_POST['Submit'])) {
  $username  =    $_POST['username'];
  $email  =    $_POST['email'];
  $password  =    $_POST['password'];
  $confirmPassword  =    $_POST['confirmPassword'];

  // echo "<script>console.log('Debug Objects: " . $password . "' );</script>";
  // echo "<script>console.log('Debug Objects:' );</script>";

  if ($password !== $confirmPassword) {
    echo "<script type='text/javascript'>alert('Password tidak sama');</script>";
  }
  if (!$title && !$email && !$password) {
    echo "<script type='text/javascript'>alert('Data tidak boleh kosong');</script>";
  } else {
    $result = mysqli_query($mysqli, "UPDATE users 
    SET password='$password'
    WHERE email='$email'");

    echo "<script type='text/javascript'>alert('Sukses Ganti Password');</script>";
    header("Location: user.php");
  }
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
            <a class="md:p-4 py-3 px-0 block" href="resetPassword.php">Reset Password</a>
          </li>
          <li>
            <a class="md:p-4 py-3 px-0 block" href="index.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- ##### Section Component ##### -->
  <section>
    <!-- ##### Signin Component ##### -->
    <div
      class="mx-auto flex min-h-[calc(100vh-144px)] w-full items-center justify-center text-black">
      <form class="flex w-[30rem] flex-col space-y-10" action="resetPassword.php" method="post">
        <div class="text-center text-4xl font-medium">Reset Password</div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            type="text"
            placeholder="Username"
            name="username"
            class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
        </div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            type="text"
            placeholder="Email"
            name="email"
            class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
        </div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            type="password"
            placeholder="Old Password"
            name="password"
            class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
        </div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            type="password"
            placeholder="Password"
            name="password"
            class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
        </div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            type="password"
            placeholder="Confirm Password"
            name="confirmPassword"
            class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
        </div>

        <button
          class="transform py-2 font-semibold text-white transition-colors bg-gray-900 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-offset-2 focus:ring focus:ring-gray-200 px-7 dark:bg-white dark:text-black"
          name="Submit"
          type="submit">
          CHANGE PASSWORD
        </button>
      </form>
    </div>
  </section>
  <!-- ##### Footer Component ##### -->
  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Lucky Software House. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>