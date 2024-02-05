<?php include 'header.html'; ?>


<main>
    <section>
        <article>
            <figure>
                <img src="assets/img/new_project_-_2023-11-15t131853.278_1.jpg" alt="Avatar Edition Gold">
            </figure>
            <p>Prix: 19.99€</p>
            <form action="ajouter_au_panier.php" method="post">
                <input type="hidden" name="product" value="Avatar Edition Gold">
                <input type="hidden" name="price" value="19.99">
                <input type="submit" value="Ajouter au panier">
            </form>
        </article>
    </section>
</main>

<?php include 'footer.html'; ?>

</body>
</html>