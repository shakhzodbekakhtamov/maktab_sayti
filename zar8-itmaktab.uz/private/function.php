<?php 

	require 'yadro.php';
    
    /**
     * For sign_in users
     */
    class UserLogin{

        public function sign_in($post){
            if(empty($post)){
                $error = array('login' => '', 'password' => '');
            }else{
                if($post['login'] == ''){
                    $error['login'] = 'empty';
                }else{
                    $error['login'] = '';
                }
                if($post['password'] == ''){
                    $error['password'] = 'empty';
                }else{
                    $error['password'] = '';	
                }
                $users = $GLOBALS['pdo'] -> prepare("SELECT * FROM `users` WHERE `login` =  ?");
                $user_login = (!empty($post['login']) ? $post['login'] : '');
                $user_password = (!empty($post['password']) ? $post['password'] : '');
                $users -> execute(array(
                    $user_login
                ));
                $row = $users->rowCount();
                if ($row){
                    $fetch = $users->fetch();
                    if($error['login'] == '' AND $error['password'] == ''){
                        if( $fetch['password'] == hash('sha3-512',$post['password'])){
                            $value = $post['login'];
                            $value2 =  hash('sha3-512',$post['password']);
                            if(isset($post['save'])){
                                setcookie('uslog', $value, time() +60*60*24*7, "/", "zar8-itmaktab.uz", 1);
                                setcookie('uspass', $value2, time() +60*60*24*7, "/", "zar8-itmaktab.uz", 1);
                            }elseif (@$_COOKIE['uslog'] == $value AND @$_COOKIE['uspass'] == $value2) {
                                setcookie('uslog', $value, time()-60*60*24*7);
                                setcookie('uspass', $value2, time()-60*60*24*7);
                            }
                            header('Location:/');
                        }else{
                            echo "<p>Parol yoki Login xato !</p>";
                        }
                    }else{
                        echo "<p>Login va Parolni yozing ! O'zizni aldayapsiz !</p>";
                    }
                }else{
                    echo "Bunday foydalanuchi yuq";
                }
            }
        return $error;
		}
    }

	//admin $_COOKIE check
	if (isset($_COOKIE['uslog']) and isset($_COOKIE['uspass'])) {
	    $uslogad = $_COOKIE['uslog'];
	    $uspassad = $_COOKIE['uspass'];
	    $dbsad = $GLOBALS['pdo']->prepare("SELECT * FROM `users` WHERE `login` = ? and `password` = ? LIMIT 1");
	    $dbsad->execute(array($uslogad, $uspassad));
	    $userad = $dbsad -> fetch();
	    if (!isset($userad['id'])) {
	        if ($userad['login'] != $uslogad or $userad['password'] != $uspassad) {
                unset($_COOKIE['uslog']);
                unset($_COOKIE['uspass']);
	            setcookie('uslog', '', time() - 86400*31);
	            setcookie('uspass', '', time() - 86400*31);
	        }
	    }
	}
	
	function noauth(){
	    global $userad;
	    if(isset($userad['id'])){
            header('Location: /');
	    }
    }
	    
	function auth(){
	    global $userad;
	    if(!isset($userad['id'])){
	        header('Location: /');
	    } 
	}

    /**
     * for add news
     */
    class AddingNews{
        
        function add($post){
            if(empty($post)){
                $error = array('title' => '', 'text' => '');
            }else{ 
                $tmpFilePath = @$_FILES['image']['tmp_name'];
                $fileName = @$_FILES['image']['name'];
                $extension_name = substr($fileName,-3);

                if ($tmpFilePath != ""){
                        if ($extension_name == 'jpg' OR $extension_name == 'png' OR $extension_name == 'gif') {
                            $newFilePath = "./image/" . $_FILES['image']['name'];

                            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                                $add_news = $GLOBALS['pdo']->prepare("INSERT INTO `news` SET `title` = ?, `text` = ?, `image` = ?");
                                $abc = $add_news -> execute(array(
                                    htmlspecialchars($post['title']),
                                    htmlspecialchars($post['text']),
                                    $fileName
                                ));
                                if ($abc) {
                                    echo "<font color = 'green'>muvaffaqiyatli amalga oshdi !<p></font></p>";
                                } else {
                                    echo "<font color = 'red'><p>xatolik yuz berdi ! qayta urinib ko'ring.</font></p>";
                                }
                                
                            }else{
                                echo "Yuklashda xatolik ro'y berdi. Qaytadan urinib ko'ring !";
                            }
                        } else {
                            echo "faqat rasm turidagi fayllarni yuboring. \n jpg, png va gif turidagi fayllarni tanlang";
                        }
                }else{
                    echo "rasm qani mol ????";
                }
            }
        }
    }

    /**
     * for add teachers
     */
    class AddingTeachers{
        
        function add($post){
            if(empty($post)){
                $error = array('first_name' => '', 'last_name' => '', 'subject' => '', 'other_information' => '');
            }else{ 
                $tmpFilePath = @$_FILES['image']['tmp_name'];
                $fileName = @$_FILES['image']['name'];
                $extension_name = substr($fileName,-3);

                if ($tmpFilePath != ""){
                        if ($extension_name == 'jpg' OR $extension_name == 'png' OR $extension_name == 'gif') {
                            $newFilePath = "./image/teachers/" . $_FILES['image']['name'];

                            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                                $add_news = $GLOBALS['pdo']->prepare("INSERT INTO `teachers` SET `first_name` = ?, `last_name` = ?, `subject` = ?, other_information = ?, `image` = ?");
                                $abc = $add_news -> execute(array(
                                    htmlspecialchars($post['first_name']),
                                    htmlspecialchars($post['last_name']),
                                    htmlspecialchars($post['subject']),
                                    htmlspecialchars($post['other_information']),
                                    $fileName
                                ));
                                if ($abc) {
                                    echo "<font color = 'green'>muvaffaqiyatli amalga oshdi !<p></font></p>";
                                } else {
                                    echo "<font color = 'red'><p>xatolik yuz berdi ! qayta urinib ko'ring.</font></p>";
                                }
                                
                            }else{
                                echo "Yuklashda xatolik ro'y berdi. Qaytadan urinib ko'ring !";
                            }
                        } else {
                            echo "faqat rasm turidagi fayllarni yuboring. \n jpg, png va gif turidagi fayllarni tanlang";
                        }
                }else{
                    echo "rasm qani mol ????";
                }
            }
        }
    }

    /**
     * for message
     */
    class UsersMessage{
        
        function message($post){
            if(empty($post)){
                $error = array('author' => '', 'email' => '', 'subject' => '', 'comment' => '');
            }else{
                if($post['author'] == ''){
                    $error['author'] = 'empty';
                }else{
                    $error['author'] = '';
                }
                if($post['email'] == ''){
                    $error['email'] = 'empty';
                }else{
                    $error['email'] = '';    
                }
                if($post['subject'] == ''){
                    $error['subject'] = 'empty';
                }else{
                    $error['subject'] = '';    
                }
                if($post['comment'] == ''){
                    $error['comment'] = 'empty';
                }else{
                    $error['comment'] = '';    
                }
                $send_m = $GLOBALS['pdo']->prepare("INSERT INTO `contact` SET `author` = ?, `email` = ?, `subject` = ?, `comment` = ?");
                $send = $send_m -> execute(array(
                    trim(htmlspecialchars($post['author'])),
                    trim(htmlspecialchars($post['email'])),
                    trim(htmlspecialchars($post['subject'])),
                    trim(htmlspecialchars($post['comment']))
                ));
                echo "<script>alert('Muvaffaqiyatli amalga oshdi');</script>";
                if (!$send) {
                    echo "<script>alert('Xatolik yuz berdi. Qayta urinib koring');</script>";
                }
                
            }
        }
    }

    /**
     * for search
     */
    class SearchNews{
        
        function searchs($post){
            if (@$post['search'] == '') {
                $error = 'empty';
            } else {
                $qidiruv = trim(htmlspecialchars($post['search']));
                $pattern = '%' . $qidiruv . '%' ; 
                $search_new = $GLOBALS['pdo']->prepare("SELECT * FROM `news` WHERE `title` LIKE ?");
                $search_new -> execute([$pattern]);
                $sss = $search_new -> fetch();
                if ($sss) {
                    header("Location:gallery.php#".strtolower(trim($sss['title']))."");
                } else {
                    echo "<script>alert('Bunday malumot topilmadi');</script>";
                }
            }
        }
    }
?>
















