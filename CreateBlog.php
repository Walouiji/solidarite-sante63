<?php includeContainer('header'); ?>
<section id="mysection1" contenteditable="true">
    <div>
      <form className="Form" method="post" action="controller.php">
        <label>Titre</label>
        <input type="text" placeholder="title"></input>
        <br />
        <label>Contenu</label><br />
        <textarea rows="5" cols="60" name="content" placeholder="Content"></textarea>
        <br />
        <button type="submit">Publier</button>
      </form>
    </div>
</section>
<?php includeContainer('footer'); ?>