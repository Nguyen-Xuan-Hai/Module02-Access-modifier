<a href="index.php?page=add">Add</a>

<table class="employees-table">
    <tr>
        <td>STT</td>
        <td>Full Name</td>
        <td>Birthday</td>
        <td>Address</td>
        <td></td>
    </tr>

    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $employee->getFirstName() . $employee->getLastName()  ?></td>
            <td><?php echo $employee->getBirthday() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><a onclick="return confirm('are you sure?')" href="index.php?page=delete&id=<?php echo $key ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>