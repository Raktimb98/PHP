<?php
// print_r($_FILES);
// die;

$action=$_REQUEST['action'];

if(!empty($action)){
    require_once 'partials/user.php';
    $obj = new User();
}
// Adding user
if($action == 'adduser' && !empty($_POST)){
    $paname=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['image'];

    $playerid = (!empty($_POST['userId'])) ? $_POST['userId'] : '';

    $imagename = "";
    if(!empty($photo['name'])){
        $imagename = $obj->uploadPhoto($image);
        $playerdata = [
            'name'=>$pname,
            'email'=>$email,
            'mobile'=>$mobile,
            'image'=>$imagename,
        ];
    }
    else{
        $playerdata = [
            'name'=>$pname,
            'email'=>$email,
            'mobile'=>$mobile,
        ];
    }
    $playerid = $obj->add($playerdata);
    if(!empty($playerid)){
        $player = $obj->getRow('id',$playerid);
        echo json_encode($player);
        exit();
    }
}
?>