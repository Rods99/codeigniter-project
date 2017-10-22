<h2>Projects</h2>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?php echo $project->name ?></td>
                <td><?php echo $project->body ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
