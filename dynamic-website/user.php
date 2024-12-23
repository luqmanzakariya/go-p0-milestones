<?php
include_once("config.php");

if (isset($_POST['Submit'])) {
  $full_name  =    $_POST['name'];
  $email  =    $_POST['email'];
  $message  =    $_POST['message'];

  // echo "<script>console.log('Debug Objects: " . $message . "' );</script>";
  // echo "<script>console.log('Debug Objects:' );</script>";

  $result = mysqli_query($mysqli, "INSERT INTO messages (full_name, email, message) VALUES ('$full_name', '$email', '$message')");

  $msg = "Pesan sukses terkirim";
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Lucky Software House</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
      <a href="user.php" class="text-xl font-extrabold">Lucky Software House</a>
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
    <!-- ##### Home Component ##### -->
    <div id="/" class="max-w-5xl mx-auto mt-12 px-4 text-center">
      <div class="w-full max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mt-2 mb-6">
          Your Trusted Software Development Partner<br />Lucky Software House
        </h1>
        <p class="px-4 leading-relaxed">
          Transform your business with custom software solutions from Lucky
          Software House.<br />
          We build innovative, scalable, and reliable applications that drive
          growth and deliver measurable results.
          <!-- Propiti provides you with a quick, simple way to reach multiple
            estate agents.<br />Allowing you to spend less time trawling through
            property portals,<br />giving you more time on the other things you
            enjoy. -->
        </p>
        <p class="mb-8 mt-4 px-4 leading-relaxed">
          Oh, and the best bit...
          <span class="text-pink-600 font-bold">It's cheap!</span>
        </p>
        <div>
          <a
            class="inline-block py-4 px-8 leading-none text-white bg-slate-800 hover:bg-pink-600 rounded shadow text-sm font-bold"
            href="register.php">Sign-up for free</a>
        </div>
      </div>
    </div>
    <!-- ##### Product Component ##### -->
    <div id="product" class="max-w-7xl mx-auto">
      <div class="grid gap-6 pt-16 px-5">
        <h2 class="text-4xl font-bold mb-4">Product and Services</h2>
      </div>
      <ul id="product" class="grid gap-6 md:gap-12 md:grid-cols-3 p-5">
        <li
          class="p-6 shadow-xl rounded-xl ring-1 ring-black/5 shadow-black/10">
          <h3 class="font-bold tracking-tight text-violet-600">Starter</h3>
          <p class="mt-6 text-4xl font-bold tracking-tighter">$5</p>
          <p class="mt-3 text-black/60">
            For small businesses that want to automate their link previews and
            start growing.
          </p>

          <ul class="mt-6 space-y-1.5">
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>10 Sites</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>50 Templates</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>250 Images per month</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Full API access</span>
            </li>
          </ul>
          <a
            class="flex mt-3 justify-center bg-gray-100 rounded rounded-xl py-1"
            href="/">Try 7 days for free</a>
        </li>
        <li
          class="p-6 shadow-xl rounded-xl ring-1 ring-black/5 shadow-black/10">
          <h3 class="font-bold tracking-tight text-violet-600">Pro</h3>
          <p class="mt-6 text-4xl font-bold tracking-tighter">$14</p>
          <p class="mt-3 text-black/60">
            For professional businesses that require automation for scaling
            their link previews.
          </p>

          <ul class="mt-6 space-y-1.5">
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>50 Sites</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>100 Templates</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>1000 Images per month</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Full API access</span>
            </li>
          </ul>
          <a
            class="flex mt-3 justify-center bg-gray-100 rounded rounded-xl py-1"
            href="/">Try 7 days for free</a>
        </li>
        <li
          class="p-6 shadow-xl rounded-xl ring-1 ring-black/5 shadow-black/10">
          <h3 class="font-bold tracking-tight text-violet-600">Business</h3>
          <p class="mt-6 text-4xl font-bold tracking-tighter">$29</p>
          <p class="mt-3 text-black/60">
            For large organizations that require high volume automation for
            their link previews.
          </p>

          <ul class="mt-6 space-y-1.5">
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>10000 Sites</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>10000 Templates</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>10000 Images per month</span>
            </li>
            <li class="flex items-center gap-1.5 font-medium">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-5 h-5 text-violet-600"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Full API access</span>
            </li>
          </ul>
          <a
            class="flex mt-3 justify-center bg-gray-100 rounded rounded-xl py-1"
            href="/">Try 7 days for free</a>
        </li>
      </ul>
    </div>
    <!-- ##### Portfolio Component ##### -->
    <div
      id="portfolio"
      class="portfolio-section py-16 px-4 max-w-7xl mx-auto">
      <div class="container mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-4">Portfolio Showcase</h2>
          <p class="text-lg text-indigo-500 font-semibold">
            Discover our latest projects and success stories
          </p>
        </div>
        <!-- <div class="flex flex-col md:flex-row items-center mb-8">
            <button
              class="filter-button bg-indigo-500 hover:bg-pink-500 px-4 py-2 mr-2 mb-2 text-white rounded"
            >
              All
            </button>
            <button
              class="filter-button bg-indigo-500 hover:bg-pink-500 px-4 py-2 mr-2 mb-2 text-white rounded"
            >
              Web Design
            </button>
            <button
              class="filter-button bg-indigo-500 hover:bg-pink-500 px-4 py-2 mr-2 mb-2 text-white rounded"
            >
              App Development
            </button>
            <button
              class="filter-button bg-indigo-500 hover:bg-pink-500 px-4 py-2 mr-2 mb-2 text-white rounded"
            >
              Branding
            </button>
          </div> -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://luqmanzakariya.com/">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/portfolio.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  luqmanzakariya.com
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Web development</span>
              </div>
            </a>
          </div>
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://olapuspita.luqmanzakariya.com/">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/wedding.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  olapuspita.luqmanzakariya.com
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Branding</span>
              </div>
            </a>
          </div>
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://www.bareksa.com/reksadana">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/bareksa.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  bareksa.com/reksadana
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Financial Tech App, Branding</span>
              </div>
            </a>
          </div>
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://prioritas-internal.bareksa.com/">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/prioritas.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  Bareksa Prioritas
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Web Design, Branding</span>
              </div>
            </a>
          </div>
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://prioritasinvestor.bareksa.com/">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/investor.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  Bareksa Prioritas Investor
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Web Design, Branding</span>
              </div>
            </a>
          </div>
          <div
            class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
            <a href="https://sparing.ppkl.menlhk.go.id/#/home">
              <img
                class="w-full h-60 object-cover"
                src="https://storage.googleapis.com/images.luqmanzakariya.com/hacktivgo/sparing.png"
                alt="Project 1" />
              <div
                class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-indigo-500 to-pink-500 opacity-0 transition duration-300 ease-in-out group-hover:opacity-70"></div>
              <div
                class="p-4 flex flex-col items-center justify-between relative z-10">
                <h3
                  class="text-lg font-medium text-txt group-hover:text-gray-dark">
                  sparing.ppkl.menlhk.go.id
                </h3>
                <span
                  class="text-sm font-bold text-pink-500 group-hover:text-indigo-500">Web Design, Branding</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ##### About Component ##### -->
    <div id="about" class="relative bg-white overflow-hidden mt-16">
      <div class="max-w-7xl mx-auto">
        <div
          class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
          <svg
            class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
            fill="currentColor"
            viewBox="0 0 100 100"
            preserveAspectRatio="none"
            aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100"></polygon>
          </svg>

          <div class="pt-1"></div>

          <main
            class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="sm:text-center lg:text-left">
              <h2
                class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                About Us
              </h2>

              <p>
                Lucky Software House is a dedicated team of software
                developers passionate about building innovative solutions for
                our clients. We believe in fostering strong partnerships,
                working closely with each client to understand their unique
                needs. Our expertise spans a wide range of technologies,
                allowing us to create custom software tailored to specific
                business goals. We are committed to delivering high-quality,
                reliable, and scalable software that drives growth and
                success. At Lucky Software House, we transform ideas into
                powerful digital realities.
              </p>
            </div>
          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img
          class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full"
          src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Technology_Trends.jpg"
          alt="" />
      </div>
    </div>

    <!-- ##### Contact Us Component ##### -->
    <div id="contact" class="bg-gray-50 dark:bg-gray-900" id="contact">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 text-center">
        <h2 class="text-4xl font-bold dark:text-gray-100">Contact</h2>
        <p
          class="pt-6 pb-6 text-base max-w-2xl text-center m-auto dark:text-gray-400">
          Want to contact us? Choose an option below and well be happy to show
          you how we can transform companys web experience.
        </p>
      </div>
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 grid md:grid-cols-2 lg:grid-cols-2 gap-y-8 md:gap-x-8 md:gap-y-8 lg:gap-x-8 lg:gap-y-16">
        <div>
          <h2 class="text-lg font-bold dark:text-gray-100">Contact Us</h2>
          <p class="max-w-sm mt-4 mb-4 dark:text-gray-400">
            Have something to say? We are here to help. Fill up the form or
            send email or call phone.
          </p>
          <div
            class="flex items-center mt-8 space-x-2 text-dark-600 dark:text-gray-400">
            <span>Jl. Raya Pos Pengumben, Jakarta Barat</span>
          </div>
          <div
            class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
            <a href="mailto:hello@company.com">mail@lucky.com</a>
          </div>
          <div
            class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
            <a href="tel:11111111111">+62 123456789012</a>
          </div>
        </div>
        <div>
          <form action="user.php" method="post">
            <input
              type="checkbox"
              id=""
              class="hidden"
              style="display: none"
              name="botcheck" />
            <div class="mb-5">
              <input
                type="text"
                placeholder="Full Name"
                autocomplete="false"
                class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white rounded-md outline-none dark:placeholder:text-gray-200 dark:bg-gray-900 focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                name="name" />
            </div>
            <div class="mb-5">
              <label for="email_address" class="sr-only">Email Address</label>
              <input
                id="email_address"
                type="email"
                placeholder="Email Address"
                autocomplete="false"
                class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white rounded-md outline-none dark:placeholder:text-gray-200 dark:bg-gray-900 focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                name="email" />
            </div>
            <div class="mb-3">
              <textarea
                placeholder="Your Message"
                class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white dark:placeholder:text-gray-200 dark:bg-gray-900 rounded-md outline-none h-36 focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                name="message">
                </textarea>
            </div>
            <button
              name="Submit"
              type="submit"
              class="w-full py-4 font-semibold text-white transition-colors bg-gray-900 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-offset-2 focus:ring focus:ring-gray-200 px-7 dark:bg-white dark:text-black">
              Send Message
            </button>
          </form>
        </div>
      </div>
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