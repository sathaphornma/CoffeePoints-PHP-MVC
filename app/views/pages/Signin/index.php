<!DOCTYPE html>
<html>

<head>
    <?php require_once __DIR__ . '/../../layouts/head.php' ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <th>Staff ID : </th>
                <td><input type="text" name="sid" value="root" </td> </tr> <tr>
                <th>Password : </th>
                <td><input type="password" name="pwd" value="1234"></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
                <td><button type="reset">Reset</button></td>
            </tr>
        </table>

    </form>
</body>

</html>