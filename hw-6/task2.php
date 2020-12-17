<form action="server.php?task=2" method="POST" enctype="multipart/form-data">

    <input type="text" name="arg1" size="5">
    <input type="text" name="arg2" size="5"> <br> <br>
    
    <button name="operation" value="+">+</button>
    <button name="operation" value="-">-</button>
    <button name="operation" value="*">*</button>
    <button name="operation" value="/">/</button>

    <p>= <?=$_GET['result'] ?></p>
    
</form>