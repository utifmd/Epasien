<?php
$data = array(
    array("title" => "ambulance", "image" => $project_dir."assets/img/departments-1.jpg", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam blanditiis labore itaque aliquam numquam! Molestias rem facilis voluptas, officiis aspernatur molestiae aperiam numquam velit aut porro! Eaque, quaerat. Autem, natus?"),
    array("title" => "baby spa", "image" => $project_dir."assets/img/departments-2.jpg", "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iste amet veritatis rerum ducimus ab rem voluptates nam saepe illum aut labore aliquid odio facilis aperiam soluta possimus, asperiores optio?"),
    array("title" => "farmasi", "image" => $project_dir."assets/img/departments-3.jpg", "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iste amet veritatis rerum ducimus ab rem voluptates nam saepe illum aut labore aliquid odio facilis aperiam soluta possimus, asperiores optio?"),
);

$token_ambulance = tokenizeData($data[0]);
$token_baby_spa = tokenizeData($data[1]); 
$token_farmasi = tokenizeData($data[2]);

function tokenizeData($raw){
    return base64_encode(serialize($raw));
}
?>