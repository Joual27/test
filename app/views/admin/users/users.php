<?php 
// Include File 
  include '../../incfile/header.php';
  include '../../incfile/sidebar.php';
  require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/repositories/database.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/config/redirect.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/models/User.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/services/UserInterface.php");


  $db = new Database();
  $userService = new UserService($db);
  $fetchUsers = $userService->getAllUsers();

  

?>


   <!-- TABLE -->


      <div class="relative overflow-x-auto shadow-md  ml-[185px] top-12 sm:rounded-lg">
        <button id="btnForm" class="font-bold  px-5 py-1 border-3 shadow-md transition ease-in duration-500 border-blue-300 dark:bg-gray-800 text-gray-200 font-serif ">
            <a href="addUser.php">+ Add User</a>
        </button>

        <table class="w-full text-lg text-left rtl:text-right mt-5 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        USERNAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EMAIL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PHONE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RUE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        VILLE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        QUARTIER
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CODE POSTAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTIONS
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($fetchUsers as $user) { ?>
                    <tr>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->userID ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->username ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->email ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->phone ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->rue ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->ville ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->quartier ?>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <?= $user->codePostal ?>
                    </th>
                    <th scope="col" class="px-6 py-3 flex items-center gap-3" >
                        <a href="deleteUser.php?id=<?= $user->userID ?>" class="flex items-center justify-center bg-rose-500 text-white w-[40px] h-[40px]">
                             <i class="fa-solid fa-trash"></i>
                        </a>
                        <a href="updateUser.php?id=<?= $user->userID ?>" class="flex items-center justify-center bg-green-500 text-white w-[40px] h-[40px]">
                        <i class="fa-solid fa-pen"></i>
                        </a>
                    </th>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
      





  



<?php include '../../incfile/footer.php' ?>
