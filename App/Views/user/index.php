<?php require_once ROOT_PATH . '/App/Views/start.php'; ?>

<div class="container-fluid">
    <div class="bg-light py-2 px-5 rounded">
        <div class="col-sm-8 mx-auto">
            <h1>All Users</h1>
            <p><?= $data['total_users']; ?> user(s) found</p>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <?php
                    // print_r($data);
                    // print_r($data[0]);
                    // exit;
                    foreach (array_keys($data['users'][0]) as $user) {
                        echo "<th scope='col'>" . strtoupper($user) . "</th>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // print_r($data);
            // exit;
            foreach ($data['users'] as $user) {
                // print_r($user);
                echo '<tr>';
                foreach($user as $key => $value) {
                    echo '<td>' . $user[$key] . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php require_once ROOT_PATH . '/App/Views/end.php'; ?>