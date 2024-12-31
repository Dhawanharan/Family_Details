<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form_styling.css">
    </head>
    <body>
        <div id="container">
            <div id="content">
                <div>
                    <form action="member_added.php" method="post">
                        <div id="header">
                            <h3>Add Family Member</h3>
                        </div>

                        <div id="btn_add">
                            <a href="index.php">View Members</a>
                        </div>

                        <label for="fname">First Name</label>
                        <input type="text" id="first_name" name="first_name" maxlength="80">

                        <lable for="lname">Lastname</lable>
                        <input type="text" id="last_name" name-"last_name" maxlength="80">

                        <lable for="age">Age</lable>
                        <input type="number" id="age" name="age" min="1" max="100">

                        <label for="gender">Gender</label>
                        <select id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <label for="relationship">Relationship</label>
                        <input type="text" id="relationship" name="relationship" maxlenght="80">

                        <input type="submit" name="submit" value="ADD">
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>