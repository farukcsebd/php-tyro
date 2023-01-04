<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
</head>
<body>
     <form action="action.php" method="GET">
        <h3>GPA Calculator</h3><br>
        <label for="">Enter GPA: </label>
        <input type="number" name="gpa" step="0.1" ><br><br>
        <label for="">Study Level</label>
        <select name="studyLevel">
            <option>--Select--</option>
            <option value="jsc">JSC</option>
            <option value="ssc">SSC</option>
            <option value="graduation">Graduation</option>
            <option value="masters">Master's</option>
        </select>
        <br><br>
        <input type="submit" name = "submit" value="Submit"><br> <br>
    </form>
</body>
</html>