<!DOCTYPE html>
<html>
    <head>
        <title>register your account</title>
        <link href="register.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php 
        echo '
        <fieldset>
            <div id="registration">
                <h1>Here you can register your account!</h1>
    
                <form method="post" action="registration.php">
                    <input type="text" name="username" placeholder="username"><br><br>
                    <input type="text" name="password" placeholder="password"><br><br>
                    <input type="text" name="email" placeholder="E-Mail"><br><br>
                    <fieldset id="hobbies">
                        <legend>Choose your hobbies</legend>
                        

                        <div>
                          <input type="checkbox" id="hobbies" name="hobbies" value="coding">
                          <label for="coding">Coding</label>
                        </div>
                        <div>
                          <input type="checkbox" id="hobbies" name="hobbies" value="music">
                          <label for="music">Music</label>
                        </div>
                        <div>
                            <input type="checkbox" id="hobbies" name="hobbies" value="soccer">
                            <label for="soccer">Soccer</label>
                        </div>
                        <div>
                            <input type="checkbox" id="hobbies" name="hobbies" value="bouldering">
                            <label for="bouldering">Bouldering</label>
                        </div> 
                        
                      </fieldset> <br><br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </fieldset>
        ';
        ?>
    </body>
</html>

