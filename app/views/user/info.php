<?php if (isset($_POST['selectUser']) && isset($_POST['userSelected'])) : ?>
    <?php $_SESSION['selectId'] = $_POST['userSelected']; ?>
    <a href="../user/edit"><input type="submit" name="edit" value="edit"></a>
    <a href="../user/delete"> <input type="submit" name="delete" value="delete"></a>
<?php endif; ?>

<?php if (!isset($_POST['selectUser'])) : ?>

<form method="post">
    <?php if($this->getCurrentActionName() != 'restore') :?>
    <input type="text" placeholder="role" name="role" value = "<?php if(isset($listCreate['role_accept'])) echo $listCreate['role_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['role_create'])) echo $listCreate['role_create']; ?></span>
    <br>
    <input type="text" placeholder="email" name="email" value = "<?php if(isset($listCreate['email_accept'])) echo $listCreate['email_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['email_create'])) echo $listCreate['email_create']; ?></span>
    <br>
    <input type="text" placeholder="password" name="password" value = "<?php if(isset($listCreate['password_accept'])) echo $listCreate['password_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['password_create'])) echo $listCreate['password_create']; ?></span>
    <br>
    <input type="text" placeholder="address" name="address"><br>
    <input type="text" placeholder="sex" name="sex" value = "<?php if(isset($listCreate['sex_accept'])) echo $listCreate['sex_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['sex_create'])) echo $listCreate['sex_create']; ?></span>
    <br>
    <input type="text" placeholder="name" name="name" value = "<?php if(isset($listCreate['name_accept'])) echo $listCreate['name_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['name_create'])) echo $listCreate['name_create']; ?></span>
    <br>
    <input type="text" placeholder="birth" name="birth" value = "<?php if(isset($listCreate['birth_accept'])) echo $listCreate['birth_accept']; ?>">
    <span style="color: red"><?php if (isset($listCreate['birth_create'])) echo $listCreate['birth_create']; ?></span>
    <br>
    <input type="submit" value="<?php echo $this->getCurrentActionName(); ?>"
           name="<?php echo $this->getCurrentActionName(); ?>">
    <?php endif; ?>
    <?php if (isset($list)) : ?>
        <div style="border: solid 2px green">
            <form method="post">
                <?php if (empty($list)): ?>
                    <h1> No Results Found!!!</h1>
                <?php endif; ?>
                <?php if (!empty($list)): ?>
                    <table style="width:100%">
                        <tr>
                            <th style="text-align: left">Id</th>
                            <th style="text-align: left">Name</th>
                            <th style="text-align: left">Email</th>
                            <th style="text-align: left">Password</th>
                            <th style="text-align: left">Role</th>
                            <th style="text-align: left">address</th>
                            <th style="text-align: left">sex</th>
                            <th style="text-align: left">birth</th>
                            <th style="text-align: left">Select</th>
                        </tr>
                        <?php foreach ($list as $user) : ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['password'] ?></td>
                                <td><?php echo $user['role'] ?></td>
                                <td><?php echo $user['address'] ?></td>
                                <td><?php echo $user['sex'] ?></td>
                                <td><?php echo $user['birth'] ?></td>
                                <td><input type="radio" name="userSelected" value="<?php echo $user['id'] ?>"></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
                <?php if (!empty($list)) : ?>
                    <input type="submit" value="selectUser" name="selectUser">

                <?php endif; ?>
            </form>
        </div>
    <?php endif; ?>
    <?php endif; ?>
