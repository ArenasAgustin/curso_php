<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Form</title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form action='action.php' method='POST' enctype="multipart/form-data">
        <div>
            <label for='name'>Name:</label>
            <input type='text' name='name' id='name'>
        </div>

        <br>

        <div>
            <label for='courses'>Courses:</label>

            <select id='course' name='courses[]' multiple>
                <option value='php'>PHP</option>
                <option value='javascript'>JavaScript</option>
                <option value='python'>Python</option>
            </select>
        </div>

        <br>

        <div>
            <label for='option-1'>
                <input type='checkbox' name='options[]' id='option-1' value='option-1'>
                Option 1
            </label>

            <label for='option-2'>
                <input type='checkbox' name='options[]' id='option-2' value='option-2'>
                Option 2
            </label>

            <label for='option-3'>
                <input type='checkbox' name='options[]' id='option-3' value='option-3'>
                Option 3
            </label>
        </div>

        <br>

        <div>
            <label for='file'>File</label>
            <input type='file' name='file' id='file' accept=".jpg, .png, .jpeg, .gif">
        </div>

        <br>

        <button type='submit'>Submit</button>
    </form>
</body>

</html>