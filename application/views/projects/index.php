<h2>Projects</h2>

<a href="<?php echo base_url().'projects/create'; ?>" class="btn btn-primary pull-right">Create project</a>
<br>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td>
                    <a href="<?php echo base_url().'projects/show/'.$project->id; ?>">
                        <?php echo $project->name ?>
                    </a>
                </td>
                <td><?php echo $project->body ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
