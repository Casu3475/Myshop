<?php

$user_edit_menu_1 = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                    Edit user
                    <br><br>
                </h2>

                <h3 class="text-2xl text-grey-400 md:text-3xl">
                    Admin privileges management
                    <br><br>
                </h3>

                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                    Please introduce the username of the user you want to grant administrator privileges to
                    <br><br><br>
                </p>

                <form method="post">
                    <label
                        
                        class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                        >
                        <input
                            type="text"
                            name="username_to_edit"
                            placeholder="User name"
                            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                        />

                        <span
                            class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                        >
                            Username
                        </span>
                    </label>

                    <br><br>
                    <input type="submit" name="select_for_editing" class="rounded-lg bg-blue-300 px-5 py-2 text-sm font-medium text-gray-600" value="Grant Admin Privileges">
                </form>

            </div>
          </div>';






$user_delete_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                  Delete user
                  <br><br>
              </h2>

              <p class="hidden text-grey-300 sm:mt-4 sm:block">
                  Please introduce the user name of the user you want to delete
                  <br><br><br>
              </p>

              <form method="post">
                  <label
                      
                      class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                      >
                      <input
                          type="text"
                          name="username_to_delete"
                          placeholder="User name"
                          class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                      />

                      <span
                          class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                      >
                          Username
                      </span>
                  </label>

                  <br><br>
                  <input type="submit" name="select_for_editing" class="rounded-lg bg-red-400 px-5 py-2 text-sm font-medium text-gray-600" value="Delete">
              </form>

          </div>
        </div>';


$product_delete_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                Delete album
                <br><br>
            </h2>

            <p class="hidden text-grey-300 sm:mt-4 sm:block">
                Please introduce the id of the album you want to delete
                <br><br><br>
            </p>

            <form method="post">
                <label
                    
                    class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                    >
                    <input
                        type="text"
                        name="product_to_delete"
                        placeholder="Album id"
                        class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    />

                    <span
                        class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                    >
                        Album id
                    </span>
                </label>

                <br><br>
                <input type="submit" name="select_for_editing" class="rounded-lg bg-red-400 px-5 py-2 text-sm font-medium text-gray-600" value="Delete">
            </form>

        </div>
      </div>';


$product_add_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                        <div class="mx-auto max-w-xl text-center">
                            <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                Add album
                                <br><br>
                            </h2>

                            <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                Please introduce the details of the new album you want to add to the database
                                <br><br><br>
                            </p>

                            <form method="post">
                                <div class="grid overflow-hidden grid-cols-3 grid-rows-2 gap-2">
                                    <div class="box">
                                        <label
                                                
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="album_name"
                                                placeholder="Album name"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Album name
                                            </span>
                                        </label>
                                    </div>
                                    <div class="box">
                                        <label
                                                        
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="artist_name"
                                                placeholder="Artist"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Artist
                                            </span>
                                        </label>
                                    </div>
                                    <div class="box">
                                        <label 
                                        
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="price"
                                                placeholder="Price"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Price
                                            </span>
                                        </label>
                                    </div>
                                    <div class="box">
                                        <label 
                                                
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="category_id"
                                                placeholder="Category ID"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Category ID
                                            </span>
                                        </label>
                                    </div>
                                    <div class="box">
                                        <label 
                                                        
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="picture"
                                                placeholder="Picture (link)"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Picture (link)
                                            </span>
                                        </label>
                                    </div>
                                    <div class="box">
                                        <label 
                                                                
                                            class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                            >
                                            <input
                                                type="text"
                                                name="description"
                                                placeholder="Description"
                                                class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                required
                                            />

                                            <span
                                                class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                            >
                                                Description
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <br><br>
                                <input type="submit" name="submit_new_album" class="rounded-lg bg-green-200 px-5 py-2 text-sm font-medium text-gray-600" value="Add to DB">
                            </form>

                        </div>
                        </div>';


$product_edit_menu_1 = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                            <div class="mx-auto max-w-xl text-center">
                                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                    Edit album - Step 1
                                    <br><br>
                                </h2>

                                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                    Please introduce the id of the album you want to edit
                                    <br><br><br>
                                </p>

                                <form method="post">
                                    <label
                                        
                                        class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                        >
                                        <input
                                            type="text"
                                            name="product_to_edit"
                                            placeholder="Album id"
                                            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                        />

                                        <span
                                            class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                        >
                                            Album id
                                        </span>
                                    </label>

                                    <br><br>
                                    <input type="submit" name="select_for_editing" class="rounded-lg bg-blue-300 px-5 py-2 text-sm font-medium text-gray-600" value="Next Step">
                                </form>

                            </div>
                            </div>';


$product_edit_menu_2 = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                            <div class="mx-auto max-w-xl text-center">
                                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                    Edit album - Step 2
                                    <br><br>
                                </h2>

                                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                    Please fill in the fields you would like to modify
                                    <br><br><br>
                                </p>

                                <form method="post">
                                    <div class="grid overflow-hidden grid-cols-3 grid-rows-2 gap-2">
                                        <div class="box">
                                            <label
                                                    
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="album_name"
                                                    placeholder="Album name"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Album name
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label
                                                            
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="artist_name"
                                                    placeholder="Artist"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Artist
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label 
                                            
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="price"
                                                    placeholder="Price"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Price
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label 
                                                    
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="category_id"
                                                    placeholder="Category ID"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Category ID
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label 
                                                            
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="picture"
                                                    placeholder="Picture (link)"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Picture (link)
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label 
                                                                    
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="description"
                                                    placeholder="Description"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"                                                    
                                                />

                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Description
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <br><br>
                                    <input type="submit" name="edit_album" class="rounded-lg bg-green-200 px-5 py-2 text-sm font-medium text-gray-600" value="Edit">
                                </form>

                            </div>
                            </div>';


$category_add_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                            <div class="mx-auto max-w-xl text-center">
                                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                    Add category
                                    <br><br>
                                </h2>
    
                                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                    Please introduce the details of the new category you want to add to the database
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
                                                    name="category_name"
                                                    placeholder="Category name"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    required
                                                />
    
                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Category name
                                                </span>
                                            </label>
                                        </div>
                                        <div class="box">
                                            <label
                                                            
                                                class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                                >
                                                <input
                                                    type="text"
                                                    name="parent_id"
                                                    placeholder="Parent ID"
                                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                                    required
                                                />
    
                                                <span
                                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                                >
                                                    Parent ID
                                                </span>
                                            </label>
                                        </div>
                       
                                    </div>
    
                                    <br>
                                    <input type="submit" name="submit_new_category" class="rounded-lg bg-green-200 px-5 py-2 text-sm font-medium text-gray-600" value="Add to DB">
                                </form>
    
                            </div>
                            </div>';
    


$category_delete_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                            <div class="mx-auto max-w-xl text-center">
                                <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                    Delete category
                                    <br><br>
                                </h2>
                  
                                <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                    Please introduce the ID of the category you want to remove from the database
                                    <br><br><br>
                                </p>
                  
                                <form method="post">
                                    <label
                                        
                                        class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                        >
                                        <input
                                            type="text"
                                            name="category_to_delete"
                                            placeholder="Category ID"
                                            class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                        />
                  
                                        <span
                                            class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                        >
                                            Category ID
                                        </span>
                                    </label>
                  
                                    <br><br>
                                    <input type="submit" name="select_for_deleting" class="rounded-lg bg-red-400 px-5 py-2 text-sm font-medium text-gray-600" value="Delete">
                                </form>
                  
                            </div>
                          </div>';


    
$category_edit_menu = '<div class="bg-white-400 h-full p-8 md:p-12 lg:px-16 lg:py-24">
                          <div class="mx-auto max-w-xl text-center">
                              <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                  Edit category
                                  <br><br>
                              </h2>
              
                              <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                  Please introduce the ID of the category you want to modify, the new parent category and the new child category (this last one only in case you would like the category to be in between two another preexisting categories)
                                  <br><br><br>
                              </p>
              
                              <form method="post">
                                  <label
                                      
                                      class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                      >
                                      <input
                                          type="text"
                                          name="id_to_edit"
                                          placeholder="Category ID (category to edit)"
                                          class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                          required
                                      />
              
                                      <span
                                          class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                      >
                                        Category ID (category to edit)
                                      </span>
                                  </label>
                                  <label
                                      
                                      class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                      >
                                      <input
                                          type="text"
                                          name="aim_parent"
                                          placeholder="New parent ID"
                                          class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                          required
                                      />
              
                                      <span
                                          class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                      >
                                        New parent ID
                                      </span>
                                  </label>
                                  <label
                                      
                                      class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                                      >
                                      <input
                                          type="text"
                                          name="aim_child"
                                          placeholder="New child ID (otional)"
                                          class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"

                                      />
              
                                      <span
                                          class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                                      >
                                        New child ID (optional)
                                      </span>
                                  </label>
              
                                  <br><br>
                                  <input type="submit" name="select_for_editing" class="rounded-lg bg-blue-300 px-5 py-2 text-sm font-medium text-gray-600" value="Edit">
                              </form>
              
                          </div>
                        </div>';
              