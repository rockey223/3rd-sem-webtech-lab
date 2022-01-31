<?php
#wait let me refer ok


// echo "".$_POST['em//bhayo? ahh vayo sir
// la share it with friends OK sir

//sir ani tyo login vaye paxi arko page load hune kasari? authenticated vanera nadekhai?



// echo "".$_POST['password'];

$conn  = new mysqli("localhost","root","","college"); #username and pass of xampp root and blank
$email =$_POST['email'];
$password = $_POST['password'];
$mark = false;
if(isset($_POST['mark'])){
    $mark = true;

}

$sql = "SELECT email FROM details WHERE email = '" . $email . "' and password = '". $password ."' ";

$result = $conn->query($sql);

    if($result->num_rows){
        echo "authenticated";
        header("Location: auth.php"); //vayo sir
        if($mark){
            setcookie("email",$email, time()+86400);//saving for aday
        }
        exit();
        #arue kei? and delete the comments sir tyo logged vanera kunai ma po up haru aauxa ni tyo php bata ho ki js ? js toastr ohh google toastr in js ok sir ani tyo remember password ma tick garda pass save hune ni? cookie php tyo kasari garne ni vandinu na sir ok 
#logout kata cha?
//logout ko banaako xaina ;pok
#for logout
# setcookie("email","", time()-86400); yeti gare pugcha; saved data lost huncha OK sir ani last one tyo retype password ma prev. pass ra tyo same xa ki nai kasari garney tyo duita comparing js batajada thik hucha. client side mai garincha yo. aile garne ho ra? aile lai yeti garum sir tyo paxi herxu. ok send this lab to your friends.
        }
        else{
        echo "denied";
        }





?>