<h2>Tasks</h2>

<?php if (!count($tasks)): ?>
    <div class="alert alert-info">
        You currently have no tasks.
    </div>

<?php else: ?>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td>
                        <a href="<?php echo base_url().'tasks/show/'.$task->id; ?>">
                            <?php echo $task->name ?>
                        </a>
                    </td>
                    <td><?php echo $task->body ?></td>
                    <td>
                        <a href="<?php echo base_url().'tasks/edit/'.$task->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Edit this task">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="<?php echo base_url().'tasks/delete/'.$task->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Delete this task">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
