<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h3><?php echo $title ?></h3>
        <a href="index.php?page=contestant&action=insert" class="btn btn-success btn-sm">New</a>
    </div>

    <div class="table-responsive mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'backend/database.php';
                    $b = new database();
                    $b->select("tblcontestant","*");
                    $result = $b->sql;
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['num']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <a href="index.php?page=contestant&action=edit&id=<?php echo $row['id']; ?>" type="button"
                            class="btn btn-primary btn-sm">Edit</a>
                        <a href="" type="button" data-id="<?php echo $row['id']; ?>" id="del"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $(document).on('click', "#del", function(e) {
        e.preventDefault();
        var del = $(this).data('id');

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "backend/contestant/delete_data.php",
                        type: "POST",
                        data: {
                            id: del
                        },
                        success: function() {
                            swal({
                                title: "Sweet!",
                                text: "Delete data",
                                imageUrl: 'thumbs-up.jpg'
                            }).then(() => location.reload());
                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    })
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
});
</script>
