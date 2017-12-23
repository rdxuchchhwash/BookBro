<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>

<head><title>Update Category | BookBro</title></head>

<script type="text/javascript">


function validate(){
    var name = document.getElementById("cName");
    flag = true;
    if(name.value.length==0){
        flag= false;
        name.style.border= "solid 2px red";
        alert("Enter Category Name");
        name.focus();
    }
    return flag;
}

</script>
<div class="new">

    <form action="updateCategoryQuery.php" enctype="multipart/form-data" method="post">
       <div class="first_block">
           
        <h2>Update Category</h2>
        <hr>
          <p>Category ID</p>
                   <div class="form-group">
                        <select name="catID" class="form-control" id="category">
                            <?php
                            $sql = "select * from category";
                            $catquery=mysqli_query($conn,$sql);
                            ?> 
                            <?php while($S=mysqli_fetch_assoc($catquery)):?>
                           
                            <option><?php echo $S['id'] ;?></option>
                            
                            <?php endwhile; ?>

                        </select>
                    </div> 
           <br><br>
           
           
        <p>Category Name</p>
        <input type="text" placeholder="Category Name" name="catName" id="cName">
       
        <input type="submit" onclick="return validate()" value="Update" style="background-color:#08ad19">
       



    </div>
    </form>
 


</div>