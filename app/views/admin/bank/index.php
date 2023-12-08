<?php 
// Include File 
  include '../../incfile/header.php';
  include '../../incfile/sidebar.php';

?>


    

      <div class="relative overflow-x-auto shadow-md  ml-[185px] top-12 sm:rounded-lg">
       <a href="bankForm.php"><button id="btnForm" class="font-bold  px-5 py-1 border-3 shadow-md transition ease-in duration-500 border-blue-300 dark:bg-gray-800 text-gray-200 font-serif ">+ Add User</button></a> 

        <table class="w-full text-sm text-left rtl:text-right mt-5 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        BANK ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BANK NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EMAIL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BANK LOGO
                    </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
      




<div id="form" class="scale-0 duration-700">                                               <!-- FORM -->
<form method="POST" action="<?= $_SERVER['PHP_SELF']?>" class="relative p-5 font-mono items-center max-w-2xl mx-auto rounded-lg shadow-lg shadow-gray-800/70 drop-shadow-2xl  dark:bg-gray-800 mt-20 " >
    <div class="flex justify-center ">
        <h1 class="text-3xl text-white font-sans text-center">Add New User</h1>
        <div class="absolute flex flex-col right-5">
            <a href="" id="btnCloseform">
            <i class="fa-solid fa-xmark text-white text-2xl font-meduim"></i>
            </a>
        </div>   
    </div>
      <!-- ========== Add to Table USERS ================== -->
      <div class="">
        <!-- Id User -->
          <div class="relative z-0 w-72 mb-5 group">
              <input type="hidden" name="userID" value="<?= uniqid(); ?>" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          </div>
          <div class="relative z-0 w-72 mb-5 group">
              <input type="hidden" name="adressID" value="<?= uniqid(); ?>" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          </div>
          <div class="relative z-0 w-72 mb-5 group">
              <input type="hidden" name="agencyID" value="<?= uniqid(); ?>" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
          </div>
          <div class="flex gap-5 my-5">
              <div class="relative w-[50%] z-0 w-72 mb-5 group">
                <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
              </div>
              <div class="relative w-[50%] z-0 w-72 mb-5 group">
                 <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                 <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
              </div>
          </div>
          <div class="flex gap-5 my-5">
              <div class="relative w-[50%] z-0 w-72 mb-5 group">
                  <input type="text" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                  <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
               </div>
               <div class="relative w-[50%] z-0 w-72 mb-5 group">
                  <input type="text" name="ville" id="ville" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                  <label for="ville" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ville</label>
              </div>
          </div>
          <div class="flex gap-5 my-5">
                <div class="relative w-[50%] z-0 w-72 mb-5 group">
                  <input type="text" name="rue" id="rue" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                  <label for="rue" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Rue</label>
              </div>
              <div class="relative z-0 w-[50%]  mb-5 group">
                <input type="text" name="quartier" id="quartier" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                <label for="quartier" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quartier</label>
              </div>
          </div>
          <div class="flex gap-5 my-3">
              <div class="relative  w-[50%] z-0 w-72 mb-5 group">
                <input type="text" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
              </div>
              <div class="relative w-[50%] z-0 w-72 mb-5 group">
                 <input type="text" name="confirmePassword" id="confirmePassword" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                 <label for="confirmePassword" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirme Password</label>
               </div>
          </div>

          <div class="flex gap-4">
              <div class="w-[33.33%]">
                  <select id="role" name="role" class=" w-full block py-2.5 px-0 w-44 text-sm text-gray-900 bg-gray-800 p-2 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                   <!-- <label for="role" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Select Role</label> -->
                    <option disabled selected value=""  class="bg-dark-gray-800">Select Role</option>
                    <option  class="bg-dark-gray-800">Admin</option>
                </select>
              </div>
              <div class="w-[33.33%]">
                  <select id="agency" name="agency" class=" w-full block py-2.5 px-0 w-44 text-sm text-gray-900 bg-gray-800 p-2 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                   <!-- <label for="role" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Select Role</label> -->
                    <option disabled selected  class="bg-dark-gray-800">Select Agency</option>
                    <option  class="bg-dark-gray-800">center ville</option>
                </select>
              </div>
              <div class="relative z-0 w-44 mb-5 group w-[33.33%]">
                <input type="text" name="CodePostal" id="CodePostal" class="w-full block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                <label for="CodePostal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Code Postal</label>
            </div>
          </div>
          </div>
        <!-- ========== End to Table USERS ================== -->

    <input type="submit" value="Add User" class="block mx-auto w-[200px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-blod rounded-lg text-xl  px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 duration-700 dark:focus:ring-blue-800">
  </form>
</div>  
  


<?php include '../../incfile/footer.php' ?>;
