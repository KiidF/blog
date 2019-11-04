<section>
    <form method="GET" action="api-json.php">
        <h3>FORMULAIRE DE CONTACT</h3>
        <label>
            Nom
            <input type="text" name="nom" placeholder="entrez votre nom">
        </label>
        <label>
            Email
            <input type="email" name="email" placeholder="entrez votre email">
        </label>
        <label>
            Message
            <textarea name="message" placeholder="Entrez votre message"></textarea>
        </label>
        <input type="hidden" name="idForm" value="contact">
        <button  type="submit">ENVOYER</button>
    </form>
</section>  