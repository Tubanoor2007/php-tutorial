
    <?php 
    $con=new mysqli( 'localhost','root','','crud');
    if($con){
        echo "db coonected succesfully";

    }else{
        echo "db coonected faild";
    }
    ?>