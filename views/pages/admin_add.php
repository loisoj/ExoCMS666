<h3>Новая страница</h3><br>

<form  action="" method="post">
  <div class="form-group">
    <label for="alias">URL</label>
    <input type="text" name="alias" id="alias" value="" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Титул страницы</label>
    <input type="text" name="title" id="title" value="" class="form-control">
  </div>

  <div class="form-group">
    <label for="content">Контент</label>
<textarea name="content" id="content" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label for="is_published">Опубликовано?</label>
    <input type="checkbox" name="is_published" id="is_published" checked ="checked" >
  </div>

  <input type="submit" class="btn btn-success" value="Добавить">
</form>
