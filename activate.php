<?php
	if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))) {
        header("LOCATION: ./index.php?content=error&alert=hacker-alert");
    }
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activateScript" method="post">
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">New Password</label>
                    <input name="email" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                    <div id="passwordHelp" class="form-text">Choose a strong password.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPasswordConfirm" class="form-label">Confirm Password</label>
                    <input name="emailcheck" type="password" class="form-control" id="inputPasswordConfirm" aria-describedby="passwordHelpConfirm">
                    <div id="passwordHelpConfirm" class="form-text">Confirm your password.</div>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-warning btn-dark btn-block">Activate Account</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/sdXDkkpz_400x400.jpg" alt="muse" class="w-50">
        </div>
    </div>
</div>