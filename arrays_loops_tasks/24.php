
<?php
    	  	
	
	  if($_POST['flag']!=1){
echo    '<form method="post" action="24.php">
      <table border="0">
        <tbody>
          <tr>
            <td>Число:</td>
            <td>
              <input type="text" value="" size="20" name="x">
            </td>
          </tr>
          <tr>
            <td>Цифра:</td>
            <td>
              <input type="text" value="" size="20" name="y">
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Отправить" name="submit">
            </td>
          </tr>
        </tbody>
      </table>
      <input type="hidden" name="flag" value="1">
    </form>';
}
else{
    echo 'Количество вхождений: '.substr_count($_POST['x'],$_POST['y']);
 
}

   
 

				
				
		
		
		
		

  
   
 




