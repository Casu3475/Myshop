<?php

$signin_form_1 = '<section class="relative bg-black flex flex-wrap lg:h-screen lg:items-center">
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
<div class="mx-auto max-w-lg">
  <h1 class="text-center text-2xl font-bold text-gray-100 sm:text-3xl">
    Welcome to Vinyl Paradise
  </h1>

  <p class="mx-auto mt-4 max-w-md text-center text-gray-300">
    The place where you will find the best music at the best prices. 
  </p>

  <form action="" method="post" class="mt-6 mb-0 space-y-4 border border-white rounded-lg p-8 shadow-2xl">
    <p class="text-lg text-gray-200 font-medium">Sign in to your account</p>

    <div>
      <label for="email" class="text-sm font-medium text-gray-200">Email</label>

      <div class="relative mt-1">
        <input
          type="email"
          name="email"
          id="email"
          class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
          placeholder="Enter email"
        />

        <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
            />
          </svg>
        </span>
      </div>
    </div>

    <div>
      <label for="password" class="text-sm font-medium text-gray-200">Password</label>

      <div class="relative mt-1">
        <input
          type="password"
          id="password"
          name="password"
          class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
          placeholder="Enter password"
        />

        <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            />
          </svg>
        </span>
      </div>
    </div>

    <button
      type="submit"
      class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
    >
      Sign in
    </button>

    <p class="text-center text-sm text-gray-400">
      No account?
      <a class="underline" href="signup.php">Sign up</a>
    </p>
  </form>
  <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a
                        class="block w-full rounded bg-black border border-gray-100 px-12 py-3 text-sm font-medium font-bold text-gray-200 shadow hover:bg-gray-200 hover:text-black sm:w-auto"
                        href="index.php"
                        >
                        Go to Home Page
                        </a>
                        </div>';

$signin_form_2 = '</div>
                    </div>
                        <div class="relative object-fill h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
                            <img
                                alt="Background image of Miles Davis playing the trumpet"
                                src="dist/images/signin/signin-bg-miles-davis.jpg"
                                class="absolute inset-0 h-full w-full object-cover"
                            />
                        </div>
                  </section>';


$user_admin_option_1 = '<section class="bg-black">
                            <div
                            class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
                            >
                            <div class="mx-auto max-w-xl text-center">';

$user_admin_option_2 = '<p class="mt-4 text-white sm:text-xl sm:leading-relaxed">
                            <br>It seems that you have an admin role. <br>
                            Where would you like to go next?<br><br>
                            </p>

                            <div class="mt-8 flex flex-wrap justify-center gap-4">
                            <a
                            class="block w-full rounded bg-black border border-gray-100 px-12 py-3 text-sm font-medium font-bold text-gray-200 shadow hover:bg-gray-200 hover:text-black sm:w-auto"
                            href="index.php"
                            >
                            Home Page
                            </a>

                            <a
                            class="block w-full rounded bg-black border border-gray-100 px-12 py-3 text-sm font-medium font-bold text-gray-200 shadow hover:bg-gray-200 hover:text-black sm:w-auto"
                            href="admin.php"
                            >
                            Admin Panel
                            </a>
                            </div>
                            </div>
                            </div>
                            </section>';