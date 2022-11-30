<?php


$user_edit_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                    Edit user 
                    <br><br>
                </h2>

                <h3 class="text-2xl text-grey-400 md:text-3xl">
                    Username
                    <br><br>
                </h3>

                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                    Please introduce the new username you would like to adopt
                    <br><br><br>
                </p>

                <form method="post">
                    <label
                        
                        class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                        >
                        <input
                            type="text"
                            name="username_to_edit"
                            placeholder="New username"
                            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                        />

                        <span
                            class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                        >
                            New username
                        </span>
                    </label>

                    <br><br>
                    <input type="submit" name="name_edit" class="rounded-lg bg-blue-300 px-5 py-2 text-sm font-medium text-gray-600" value="Edit username">
                </form>

            </div>
          </div>';



$password_edit_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                  Edit password
                  <br><br>
              </h2>

              <p class="hidden text-grey-300 sm:mt-4 sm:block">
                  Please introduce your new desired password
                  <br><br><br>
              </p>

              <form method="post">
                  <div class="grid overflow-hidden grid-cols-2 grid-rows-2 gap-2">
                      <div class="box">
                          <label
                                  
                              class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                              >
                              <input
                                  type="text"
                                  name="password_to_edit"
                                  placeholder="New password"
                                  class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                  required
                              />

                              <span
                                  class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                              >
                                  New password
                              </span>
                          </label>
                      </div>
                      <div class="box">
                          <label
                                          
                              class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                              >
                              <input
                                  type="text"
                                  name="password_confirmation"
                                  placeholder="Password confirmation"
                                  class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                  required
                              />

                              <span
                                  class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                              >
                                  Password confirmation
                              </span>
                          </label>
                      </div>
     
                  </div>

                  <br>
                  <input type="submit" name="password_edit" class="rounded-lg bg-green-200 px-5 py-2 text-sm font-medium text-gray-600" value="Edit">
              </form>

          </div>
          </div>';


$email_edit_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                  Edit email
                  <br><br>
              </h2>

              <p class="hidden text-grey-300 sm:mt-4 sm:block">
                  Please introduce your new desired email
                  <br><br><br>
              </p>

              <form method="post">
                  <div class="grid overflow-hidden grid-cols-2 grid-rows-2 gap-2">
                      <div class="box">
                          <label
                                  
                              class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                              >
                              <input
                                  type="text"
                                  name="email_to_edit"
                                  placeholder="New email"
                                  class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                  required
                              />

                              <span
                                  class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                              >
                                  New email
                              </span>
                          </label>
                      </div>
                      <div class="box">
                          <label
                                          
                              class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                              >
                              <input
                                  type="text"
                                  name="email_confirmation"
                                  placeholder="Email confirmation"
                                  class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                  required
                              />

                              <span
                                  class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                              >
                                  Email confirmation
                              </span>
                          </label>
                      </div>
     
                  </div>

                  <br>
                  <input type="submit" name="email_edit" class="rounded-lg bg-green-200 px-5 py-2 text-sm font-medium text-gray-600" value="Edit">
              </form>

          </div>
          </div>';



$avatar_edit_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                  Edit avatar
                  <br><br>
              </h2>

              <p class="hidden text-grey-300 sm:mt-4 sm:block">
                  Please introduce your new desired avatar
                  <br><br><br>
              </p>

          </div>
          </div>';



