<!DOCTYPE html>

<html>

 <head>@include('head')
        
 <body>
    
    @include('header')
   
    <form action="#" method="post">

        <p>タイトル<br>
            <input type="text" name="message" required /></p>
            <p>内容<br>
            <input type="text" name="message"></p>
            <p><input type="submit" value="登録"> <input type="reset" value="キャンセル"></p>
            
    </form>

 </body>

</html>