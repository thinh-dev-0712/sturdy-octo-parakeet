<?php 

function insert_user($name, $email, $password) {
    $sql = "insert into user (name,email,password) values ('$name','$email','$password')";
    pdo_execute($sql);
}

function checkuser($email,$password){
    $sql = "select * from user where email='".$email."' AND password='".$password."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql = "select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadall_user(){
    $sql = "select *from user";
    $listuser = pdo_query($sql);
    return $listuser;
}
function update_user($name,$email,$password,$tel,$address,$id_user){
    $sql="UPDATE user SET  name='".$name."', email='".$email."', password='".$password."', tel='".$tel."', address='".$address."' where id_user=".$id_user;
  pdo_execute($sql);
}

function loadone_user($id_user){
    $sql = "select *from user where id_user=".$id_user;
    $cate = pdo_query_one($sql);
    return $cate;
}

function update_user_full($name,$email,$password,$tel,$address,$role,$status,$id_user){
    $sql="UPDATE user SET  name='".$name."', email='".$email."', password='".$password."', tel='".$tel."', address='".$address."', role='".$role."', status='".$status."' where id_user=".$id_user;
  pdo_execute($sql);
}



?>