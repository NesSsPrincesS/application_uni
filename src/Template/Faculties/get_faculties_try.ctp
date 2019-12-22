<dl>
    <?php foreach ($faculties as $faculty): ?>
        <li value="<?php echo $faculty['id']; ?>"><?php echo $faculty['name']; ?>
            <dl>
                <?php foreach ($faculty->programs as $program): ?>
                    <li value="<?php echo $program['id']; ?>"><?php echo $program['name']; ?>
                <?php endforeach; ?>            
            </dl>
        </li>
    <?php endforeach; ?>
</dl>
