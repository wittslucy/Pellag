<?php if (!isset($_SESSION['user_id'])) {
    header('Location: /pellag/index.php?controller=User&action=logIn', true, 302);
} ?>

<div class="form-container" style="width: 70%; margin: 0 auto">
    <div class="dashboardcard">
        <h5 style="text-align: center"><i class="fab fa-twitter"></i> Update Your Twitter</h5>

        <form id="edittwitter" method="post" action="">

            <div class="form-group">
                <input name="edittwitter" id="edittwitter" type="text" class="form-control" placeholder="Update your Twitter handler"/>
            </div>

            <button type="submit" id="edittwitter" name="edittwitter" class="btn btn-primary">SAVE</button>

        </form>
    </div>
</div>

