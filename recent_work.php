<?php
    echo '<div class="our-work">';
            
            
            echo "<div class='who'>recent work</div>";
            if($total_rows>0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "<div class='gallery'>
                        <img src='libs/images/{$image}' class='image'/>
                        <div class='overlay'>
                        <div class='text'>{$name}</div>
                        </div>
                    </div>";
                    }
                
            }else{//tell the user there are no products
                echo "<div class='alert alert-info'> No Works Found </div>";
                
            }  
            
            echo "</div>";
?>