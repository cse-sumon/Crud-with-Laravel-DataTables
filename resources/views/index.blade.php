<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>To-do CRUD</title>
    <style>
        input[type='submit'], button, [aria-label] {
            cursor: pointer;
        }

        #spoiler {
            display: none;
        }

        table {
            font-family: Arial, sans-serif;
            border: 1px solid;
            border-collapse: collapse;
        }

        th {
            background-color: #0066CC;
            color: white;
        }

        td {
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>To-do CRUD</h1>
    <h3>Add</h3>
    <form action="javascript:void(0);" method="POST" onsubmit="addItem()">
        <input type="text" id="add-name" placeholder="New to-do">
        <input type="submit" value="Add">
    </form>

    <div id="spoiler">
        <h3>Edit</h3>
        <form class="my-form">
            <input type="hidden" id="edit-id">
            <input type="checkbox" id="edit-isComplete">
            <input type="text" id="edit-name">
            <input type="submit" value="Save">
            <a onclick="closeInput()" aria-label="Close">&#10006;</a>
        </form>
    </div>

    <p id="counter"></p>

    <table>
        <tr>
            <th>Name</th>
        </tr>
        <tbody id="todos"></tbody>
    </table>
    <table id="users-table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dept</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
    </table>



    <script type="text/javascript">
        $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'getBasicObjectData',
        columns: [
            {data: 0, name: 'id'},
            {data: 1, name: 'name'},
            {data: 2, name: 'email'},
            {data: 3, name: 'created_at'},
            {data: 4, name: 'updated_at'}
        ]
    });
    </script>



























    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="{{asset('public/js/site.js')}}"></script>
</body>
</html>