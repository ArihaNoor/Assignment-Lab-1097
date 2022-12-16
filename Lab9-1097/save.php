<?PHP
//---------------(i)----------------
echo "<h1>Question # 2 (i)</h1><br>";
echo "<strong>User Email: </strong>";
echo $email = $_POST['u_email'];
if($email==""){
    echo "Email is Required<br>";
}
echo "<br>";
echo "<strong>User Password: </strong>";
echo $pass = $_POST['u_pwd'];
echo "<br>";
if($pass==""){
    echo "Password is Required<br>";
}
//---------------(ii)-----------------
echo "<h1>Question # 2 (ii)</h1><br>";
if(isset($_POST['optradio'])){
    echo "You have Selected : " . $_POST['optradio'];
    echo "<br>";
}
//---------------(iii)-----------------
echo "<h1>Question # 2 (iii)</h1><br>";
if(isset($_POST['check'])){
    echo "true";
}else{
    echo "False";
}
//---------------(iv)-----------------
echo "<h1>Question # 2 (iv)</h1><br>";
echo "<br>Array Sorting<br>";
function sortArray($arr, $string){
    if($string=="ASC"){
        sort($arr);
    }
    elseif($string=="DSC"){
        rsort($arr);
    }else{
        sort($arr);
    }
    $arrlength = count($arr);
    for($x = 0; $x < $arrlength; $x++) {
    echo $arr[$x];
    echo ",";
}
}
$numbers = array(4, 6, 2, 22, 11);
sortArray($numbers,"");
echo "<br>";
//---------------(v)-----------------
echo "<h1>Question # 2 (v)</h1><br>";
if($_POST['optradio']=='option1'){
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    echo "<strong>Random Number Arrays</strong><br>";
    foreach($random_number_array as $v){
        echo "$v,";
    }
    echo "<br><strong>Sorted Array</strong><br>";
    sortArray($random_number_array, "");

}else{
    echo "You Have Selected another option<br>";
}
//---------------(vi)-----------------
echo "<h1>Question # 2 (vi)</h1><br>";
if($_POST['optradio']=='option2'){
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    echo "<strong>Random Number Arrays</strong><br>";
    print_r($random_number_array);
    echo "<br><strong>Sorted Array</strong><br>";
    sortArray($random_number_array, "");
    echo "<strong>Array After Reset</strong><br>";
    reset($random_number_array);
    print_r($random_number_array);
}

?>