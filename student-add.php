<!DOCTYPE html>
<html>
<?php include_once 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>


<hr>
<div class="content-area">

    <a href="student.php">back</a>

    <div>
        <form>
            <div class="from-group">
                <label> Full name</label>
                <input type="text" name="name" id="name" class="input" placeholder="please insert your student name">
                <small style="color:red">please insert your student name</small>

            </div>
            <div class="from-group">
                <label> ID</label>
                <input type="text" name="roll" id="roll" class="input" placeholder="please insert your id">
                <small style="color:red">please insert your student id</small>

            </div>
            <div class="from-group">
                <label> class</label>
                <select  class="input-select" name="semester" id="semester">
                <option >1</option>
                <option >2</option>
                <option >3</option>
                <option >4</option>
                <option >5</option>
                <option>6</option>
                </select>
                

            </div>
            <div class="from-group">
                <label> section</label>
                <select  class="input-select" name="section" id="section">
                <option >a</option>
                <option >b</option>
                <option >c</option>
            
                </select>
                

            </div>
            <div class="from-group">
                <label> Group</label>
                <select  class="input-select" name="group" id="group">
                <option >scince</option>
                <option >commers</option>
                <option >arts</option>
            
                </select>
                

            </div>
        </form>
    </div>

</div>
<hr>
<?php include_once 'partials/footer.php';?>
    
</body>
</html>