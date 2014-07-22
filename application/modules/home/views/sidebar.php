<nav id="primary-nav">
    <ul>
        <?php foreach ($project as $row): ?>
            <li>
                <a href="javascript:void(0)" id="btn-collection-main" data-id="<?php echo $row->id_project ?>">
                    <i class="halfling-tasks"></i>
                    <?php echo $row->title_project ?>
                    <!--<span>10</span>-->
                </a>                
            </li>
        <?php endforeach; ?>
    </ul>
    <ul id="sidebar-menu"></ul>
</nav>
<script type="text/javascript">
    $('a#btn-collection-main').click(function() {
        $('#loading').show();
        var project_id = $(this).attr('data-id');
        $('#page-content').load("<?php echo site_url('collection/main') ?>/" + project_id, function() {
            $('#loading').hide();
        });
        return false;
    });
</script>