<?php 
    if(isset($_POST['submit'])){
        include_once 'connect.php';
        $obj=new Contact();
        $res=$obj->contact_us($_POST);
        if($res==true) {
            echo "<p>alert('Somthing went worng')</p>";
        }else{
            echo "<p>alert('Query successfully submitted.Thank You')</p>";
        }
    }
    
    
    ?>

</div><!-- /.8 -->

</div> <!-- /.row-->

</div> <!-- /.container-->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
<script src="contact.js"></script>
</body>
</html>