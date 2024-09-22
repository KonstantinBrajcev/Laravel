<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список работников</title>
</head>
<body>
    <h1>Список работников</h1>
    <form name="employee-form" id="employee-form" method="post" action="({url('store-form')})"></form>
            @csrf
            <!-- @method('PUT') -->
            <div class="form-group">
                <label for="firstname">FirstName</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="lastname">LastName</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="workData">workData</label>
                <textarea name='workData' class="form-control" required='true'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</body>
</html>
