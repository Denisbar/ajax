<?php
    //это переменная содержит имена существующих пользователей
      $existing_users=array('roshan','mike','jason');     
      $user_name=$_POST['user_name'];
      //проверка существует ли пользователь в массиве $existing_users
      if (in_array($user_name, $existing_users))
      {
            //юзер недоступен
            echo "no";
            } 
            else
            {
            //доступен
            echo "yes";
      }
      ?>