<?php 
require_once 'db/db_init.php' ; 

session_start();

if(isset($_POST["query"]))
{
    $output = '';
    $query = "select * from books where bk_name like '%".
        $_POST["query"]."%' and book_type='NEW'";
    $result = mysqli_query($conn,$query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<li>'.$row["bk_name"].'</li>';
        }
    }

    else
    {
        //$output .= '<li>No Search Result</li>';
            $output = '';
            $query = "select * from authors where author_name like '%".
            $_POST["query"]."%'";
            $result = mysqli_query($conn,$query);
            $output = '<ul class="list-unstyled">';
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $output .= '<li>'.$row["author_name"].'</li>';
                }
            }
    }

    $output .= '</ul>';
    echo $output;
}

?>

