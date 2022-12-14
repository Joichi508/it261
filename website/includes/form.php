
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
    <fieldset>
        <legend>Contact JO</legend>

        <label for="">First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">
        <span class="error"><?php echo $first_name_err     ;?></span>
        <label>Last Name</label>
        <input type="text" name="last_name" 
        value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">
        <span class="error"><?php echo $last_name_err     ;?></span>
        <label>Email</label>
        <input type="email" name="email" 
        value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">
        <span class="error"><?php echo $email_err;?></span>

        <label for="">Gender</label>

        <ul>
            <li>
                <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked = "checked" '    ;?>>Female
            </li>

            <li>
            <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked = "checked" '    ;?>>Male
            </li>

            <li>
            <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither' ) echo 'checked = "checked" '    ;?>>Neither
            </li>
        </ul>

        <span class="error"><?php echo $gender_err     ;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])   ;?>">
        <span class="error"><?php echo $phone_err     ;?></span>

        <label>Your Favorite wines</label>
        <ul>
            <li>
                <input type="checkbox" name="wines[]" value="Cabernet" <?php if(isset($_POST['wines']) && in_array('cabernet', $wines)) echo 'checked ="checked"' ;?>>Cabernet
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="Merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked ="checked"'  ;?>>Merlot
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="Syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked ="checked"'  ;?>>Syrah
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="Malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked ="checked"'  ;?>>Malbec
            <li>

        </ul>
        <span class="error"><?php echo $wines_err;?></span>     

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
        <span class="error"><?php echo $comments_err     ;?></span>

        <label>Privacy</label>
        <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes' ) echo 'checked = "checked" '    ;?>>Privacy
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err     ;?></span>


        <input type="submit" value="Send it!">
        <input type="button" onclick="window.location.href='<?php echo $SERVER['PHP_SELF']       ;?>'" value="Reset">
    </fieldset>
</form>
