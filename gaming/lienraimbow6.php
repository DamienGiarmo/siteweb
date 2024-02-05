<?php include 'header.html'; ?>


<main>
    <section>
        <article>
            <figure>
                <img src="assets/img/tom_clancy_s_rainbow_six_siege_pc_eu_.jpg" alt="Rainbow 6 Siege">
            </figure>
            <p>Prix: 19.99€</p>
            <form action="ajouter_au_panier.php" method="post">
                <input type="hidden" name="product" value="Rainbow 6 Siege">
                <input type="hidden" name="price" value="19.99">
                <input type="submit" value="Ajouter au panier">
            </form>
        </article>
    </section>
</main>

<?php include 'footer.html'; ?>

</body>
</html>