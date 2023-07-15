<?=$this->extend("projects/layout")?>
 
<?=$this->section("content")?>
<div class="container">
    <h2 class="text-center mt-5 mb-3">Create New Project</h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-info float-right" href="<?php echo base_url('/projects'); ?>"> 
                View All Projects
            </a>
        </div>
        <div class="card-body">
            <!-- flashdata for success -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success">
                    <b><?php echo session()->getFlashdata('success') ?></b>
                </div>
            <?php endif ?>
            <!-- flashdata for errors -->
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <ul>
                    <?php foreach (session()->getFlashdata('errors')  as $field => $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
 
            <form action="<?php echo base_url('/projects/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="<?= old('title') ?>">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input 
                        type="text"
                        class="form-control"
                        id="slug"
                        name="slug"
                        value="<?= old('slug') ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea 
                        class="form-control"
                        id="mytextarea"
                        rows="3"
                        name="content"><?= old('content') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Publish Status</label>
                        <select name="status" class="form-control" required>
                            <option value="1" selected>Publish</option>
                            <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input 
                        type="text"
                        class="form-control"
                        id="author"
                        name="author"
                        value="<?= old('author') ?>">
                </div>
                <div class="col-auto">
                    <input type="file" name="filename" class=" form-control">
                </div>
                 
                <button type="submit" class="btn btn-outline-primary mt-3">Save Project</button>
            </form>
             
        </div>
    </div>
</div>
 
<?=$this->endSection()?>