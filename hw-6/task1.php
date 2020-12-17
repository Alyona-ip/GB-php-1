<form action="server.php?task=1" method="POST" enctype="multipart/form-data">

    <input type="text" name="arg1" size="5">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="arg2" size="5">
    <input type="submit" value="="> <?=$_GET['result'] ?>
    
</form>
