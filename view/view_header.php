<HEADER>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(function() {
    if ($.browser.msie && $.browser.version.substr(0,1)<7)
    {
      $('.tooltip').mouseover(function(){
            $(this).children('span').show();
          }).mouseout(function(){
            $(this).children('span').hide();
          });
    }
});
</script>
<link rel="stylesheet" type="text/css" href="../ressources/stylesheet.css"/>
<div align="left" class="colonne1">
    <img src="../ressources/icons/logo.png" width="80%" height="30%">
</div>

<div align="right" class="colonne2">
<table>
<tr><td>
<a href=<?php if(isset($_SESSION["id"])){echo"../controller/controller_member_home_page.php";}else{echo"../controller/controller_home_page.php";}?>><img src="..\ressources\icons\home.png" width="20px" height="20px"></a>
</td>
<?php 
if(!isset($_SESSION["id"])){
    echo'<td>
        <form action="../controller/controller_connection.php" method="POST">
            <input type="submit" value="Sign in"class="button2">
        </form>
        </td><td> 
        <form action="../controller/controller_registration.php" method="POST">
            <input type="submit" value="Sign up" class="button2">
        </form></td></tr></table>';

}else{
    echo'<td><a href="../controller/controller_profil.php" class="tooltip"><img src="..\ressources\icons\list.png" width="30px" height="30px"><span>Lists</span></a></td>
        <td><a href="../controller/controller_change_password.php" class="tooltip"><img src="..\ressources\icons\settings.png" width="30px" height="30px"><span>Options</span></a></td>    
        <td><a href="../controller/controller_logout.php" class="tooltip"><img src="..\ressources\icons\logout.png" width="30px" height="30px"><s1pan>Logout</span></a></td></table>';
}
?>
<form action="../controller/controller_website_search.php" method="GET">
    <select name="media" class="select">
            <option value="movie">Film</option> 
            <option value="music">Music</option>
    </select>    
    <input type="text" name="search" size="30px" placeholder="Title" class="search">
    <input type="submit" value="GO" class="go">
</form>
</div>
<br>
<p>
<p>
<br>
</HEADER>
<center>