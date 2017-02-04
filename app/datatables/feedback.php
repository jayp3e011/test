
<table cellpadding="1" cellspacing="1" id="users" class="table table-bordered table-hover" width="100%">
    <thead>
    <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>Email</th>
        <th>admin</th>
        <th> CREATED AT</th>
        <th>ACTION</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>Email</th>
        <th>admin</th>
        <th> CREATED AT</th>
        <th>ACTION</th>
    </tr>
    </tfoot>
</table>

<script>
    $(document).ready(function () {
        $('#users').DataTable({
            "columns": [
                {"data": "first_name",
                    "class": "center"},
                {"data": "last_name",
                    "class": "center"},
                {"data": "email",
                    "class": "center"},
                {"data": "is_admin",
                    "class": "center"},
                {"data": "created_at",
                    "class": "center"},
                {
                    "targets": 0,
                    "data": "id",
                    "class": "center",
                    "render": function ( data, type, full, meta ) {
                      return '<a href="edit?'+data+'" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a> | <a href="delete?'+data+'" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                    }
                }
                
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: '../app/datatables/controller/user.php',
                type: 'POST'
            }
        });
    });
</script>  