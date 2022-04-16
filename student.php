<!DOCTYPE html>
<html>
<?php include_once 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>


<hr>
<div class="content-area">

    <a href="student-add.php">add student</a>

    <div>
        <table border="1">
            <thead >
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>class</th>
                    <th>id</th>
                    <th>section</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Shakib</td>
                    <td>10</td>
                    <td>200200</td>
                    <td>5</td>
                    <td>
                        <a href="">edit</a>
                        <a href="">delete</a>
                    </td>
                </tr>
            </tbody>

            <tfoot>
            <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>class</th>
                    <th>id</th>
                    <th>section</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
<hr>
<?php include_once 'partials/footer.php';?>
    
</body>
</html>