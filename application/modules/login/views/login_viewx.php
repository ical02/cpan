<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Hyrje Form</title>
</head>
<body style="text-align:">
   <h1 align="center">hyrje</h1>
  	
   	<?php echo form_open('login/verifylogin'); ?>
   	<table width="200" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td align="center"><input type="text" size="20" id="username" name="username" placeholder="User Name"/></td>
      </tr>
      <tr>
        <td align="center"><input type="password" size="20" id="passowrd" name="password" placeholder="Password"/></td>
      </tr>
      <tr>
        <td align="center">
        	<input type="submit" value="Login"/>
        </td>
      </tr>
      <tr>
        <td align="center" style="font-size:10px; color:red;"><?php echo validation_errors(); ?></td>
      </tr>
    </table>  
       
   </form>
</body>
</html>