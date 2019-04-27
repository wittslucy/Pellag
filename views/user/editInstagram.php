<?php if (!isset($_SESSION['user_id'])) {
    header('Location: /pellag/index.php?controller=User&action=logIn', true, 302);
} ?>

<div class="form-container" style="width: 70%; margin: 0 auto">
    <div class="dashboardcard">
        <h5 style="text-align: center">Update Your Instagram</h5>

        <form id="editinstagram" method="post" action="">

            <div class="form-group">
                <label for="editinstagram">Instagram</label>
                <input name="editinstagram" id="editinstagram" type="text" class="form-control" placeholder="Update your Instagram handler"/>
            </div>

            <input type="submit" id="editinstagram" class="btn btn-primary"/>

        </form>
    </div>
</div>
