<?php
    include 'header.php';
    // Connection DB
    // Create connection
        $conn = new mysqli("localhost", "root", "", "bd_brief9");  
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }           
        if(isset($_POST['BTNLOGIN']))
        {
            $CIN = $_POST['CIN'];
            $Motdepasse= $_POST['MotP'];
                if($CIN&&$Motdepasse ) {
                    $sql = "SELECT * FROM client WHERE CIN='$CIN' AND MP='$Motdepasse' AND Type_compte='Admin'";
                    $res = mysqli_query($conn, $sql);
                    $rows =mysqli_num_rows($res);
                    if($rows==1){
                        echo '<script>window.location.href = "http://localhost/Brief_9_modif/Public/html/indexAdmin.php";</script>';
                }else{
                    $sql = "SELECT * FROM client WHERE CIN='$CIN' AND MP='$Motdepasse' AND Type_compte='User'";
                    $res = mysqli_query($conn, $sql);
                    $rows =mysqli_num_rows($res);
                    if($rows==1){
                        echo '<script>window.location.href = "http://localhost/Brief_9_modif/Public/html/index.php";</script>';
                    }

                }
            
            }else echo '<script>alert("Email ou mot de passe est incorret")</script>';  
        }
?>



<form action="#" method="POST">
    <div id="conteneurIns">
        <br><br><br>
        <p id="parag3">S'identifier</p>
        <br><br>
        <div class="divInput">
            <input type="text" name='CIN' placeholder="CIN...">
            <input type="password" name="MotP" placeholder="Mot de passe...">
            <div id="divButt">
                <input type="button" value="Annuler" id="annulation">
                <input type="submit" value="Se connecter" name="BTNLOGIN" id="confirmation">
            </div>
        </div>
        <!-- <br><br> -->
        <svg id="ligne1" width="416" height="18" viewBox="0 0 416 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="208" cy="9" r="3" fill="#E9E9E9" />
            <circle cx="208" cy="9" r="8.5" stroke="#E9E9E9" />
            <line x1="216" y1="9" x2="416" y2="9" stroke="#E9E9E9" />
            <line y1="9" x2="200" y2="9" stroke="#E9E9E9" />
        </svg>
        <br><br><br>
    </div>
</form>












    
<?php
    include('footer.php');
    include('script.php'); 
?>





