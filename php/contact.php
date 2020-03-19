
<div id="contact" class="modal" style="opacity:0">
    <div class="content-modal">
        <h2>Contactez-nous :</h2>
        <form action="">
            <div>
                <label for="name">Nom: </label>
                <input type="text" name="name" id="name" class="form-item" required value="<?php echo $name;?>">
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-item" required value="<?php echo $email;?>">
            </div>
            <div>
                <label for="message">Message: </label>
                <textarea name="message" id="message" class="form-item" required><?php echo $message;?></textarea>
            </div>
            <div>
                <input type="submit" value="Envoyer" class="form-item submit">
            </div>
        </form>

        <a href="#close" title="Fermer" class="close-modal"></a>
    </div>
</div>